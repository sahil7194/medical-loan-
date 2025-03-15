<?php

namespace App\Http\Controllers;

use App\Http\Requests\Scheme\StoreSchemeRequest;
use App\Models\Scheme;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class SchemeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('scheme.list');
    }

    public function show_refer_scheme_page()
    {
        $schemes = Scheme::where('status',  '1')->paginate(10);

        return view('scheme.refer', compact('schemes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('scheme.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSchemeRequest $request)
    {
        $user = User::find(Auth::user()->id);

        $params = $request->all();

        $params['slug'] = fake()->unique()->slug;

        if ($request->hasFile('file-upload')) {
            $path = $request->file('file-upload')->store();
        }

        $params['image'] = $path;

        $params['status'] = '1';

        $user->schemes()->create($params);

        $schemes = Scheme::where('user_id', auth()->user()->id)->orderBy('created_at', 'desc')->paginate(10);

        return view('scheme.vendor_list', compact('schemes'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Scheme $scheme)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Scheme $scheme)
    {
        return view('scheme.edit', compact('scheme'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Scheme $scheme)
    {
        $params = $request->all();

        $params['slug'] = fake()->unique()->slug;

        $path = $scheme->image;

        if ($request->hasFile('file-upload')) {
            $path = $request->file('file-upload')->store();
        }

        $params['image'] = $path;

        $params['status'] = '1';

        $scheme->update($params);

        $schemes = Scheme::where('user_id', auth()->user()->id)->orderBy('created_at', 'desc')->paginate(10);

        return view('scheme.vendor_list', compact('schemes'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Scheme $scheme)
    {
        $scheme->delete();

        $schemes = Scheme::where('user_id', auth()->user()->id)->orderBy('created_at', 'desc')->paginate(10);

        return back();
    }

    public function vendor_schemes_list()
    {
        $schemes = Scheme::where('user_id', auth()->user()->id)->orderBy('created_at', 'desc')->paginate(10);

        return view('scheme.vendor_list', compact('schemes'));
    }

    public function applicant_schemes(Request $request)
    {

        $filters = $request->all();

        if (count($filters) == 0) {

            $schemes = Scheme::where('status',  '1')->paginate(10);

            return view('scheme.applicant', compact('schemes'));
        }

        $schemes = Scheme::where('status', '1')
            ->when($filters['min_interest_rate'] && $filters['max_interest_rate'], function ($query) use ($filters) {
                return $query->whereBetween('min_interest_rate', [$filters['min_interest_rate'], $filters['max_interest_rate']])
                    ->orWhereBetween('max_interest_rate', [$filters['min_interest_rate'], $filters['max_interest_rate']]);
            })
            ->when($filters['min_cibil'] && $filters['max_cibil'], function ($query) use ($filters) {
                return $query->whereBetween('min_cibil', [$filters['min_cibil'], $filters['max_cibil']])
                    ->orWhereBetween('max_cibil', [$filters['min_cibil'], $filters['max_cibil']]);
            })
            ->when($filters['min_tenure'] && $filters['max_tenure'], function ($query) use ($filters) {
                return $query->whereBetween('min_tenure', [$filters['min_tenure'], $filters['max_tenure']])
                    ->orWhereBetween('max_tenure', [$filters['min_tenure'], $filters['max_tenure']]);
            })
            ->when($filters['min_amount'] && $filters['max_amount'], function ($query) use ($filters) {
                return $query->whereBetween('min_amount', [$filters['min_amount'], $filters['max_amount']])
                    ->orWhereBetween('max_amount', [$filters['min_amount'], $filters['max_amount']]);
            })
            ->paginate(10);

        return view('scheme.applicant', compact('schemes'));
    }

    public function applicant_schemes_show(string $slug)
    {
        $scheme = Scheme::where('slug', '=', $slug)->get()->first();

        return view('scheme.applicantshow', compact('scheme'));
    }

    public function applicant_schemes_apply(string $slug)
    {
        $scheme = Scheme::where('slug', '=', $slug)->get()->first();

        $vSlug = Cache::get('vid');

        $vId = User::where('slug', $vSlug)->first();

        $vId = $vId['id'] ?? null;

        $scheme->users()->attach(auth()->user()->id, [
            "status" => '2',
            "referral_id" => $vId
        ]);

        $link = $scheme->redirection_link . "?vendor=nearme";

        return back()->with('link', $link);
    }
}
