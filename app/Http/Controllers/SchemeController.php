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

    public function applicant_schemes()
    {
        $schemes = Scheme::where( 'status',  '1')->paginate(10);

        return view('scheme.applicant', compact('schemes'));
    }

    public function applicant_schemes_show(string $slug)
    {
        $scheme = Scheme::where('slug', '=', $slug)->get()->first();

        return view('scheme.applicantshow', compact('scheme'));
    }

    public function applicant_schemes_apply(string $slug)
    {

        dd($slug);
    }
}
