<?php

namespace App\Http\Controllers;

use App\Models\Scheme;
use Illuminate\Http\Request;

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
        return view('scheme.refer');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Scheme $scheme)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Scheme $scheme)
    {
        //
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

        $scheme->users()->attach(auth()->user()->id, [
            "status" => '2',
            "referral_id" => 6 //need to taken form cache if exits
        ]);


        return back()->with('link', 'www.youtube.com');
    }
}
