<?php

namespace App\Http\Controllers;

use App\Models\Applications;
use App\Models\Scheme;
use App\Models\User;
use Illuminate\Http\Request;

class ApplicationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $schemes = User::find(auth()->user()->id)->applications()->paginate(10);

        return view('application.list', compact('schemes'));
    }

    public function show_reference_history_page()
    {
        return view('application.referencehistory');
    }

    public function show_vendor_applicant_page()
    {
        return view('application.vendor-applicant-list');
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
    public function show(Applications $applications)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Applications $applications)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Applications $applications)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Applications $applications)
    {
        //
    }
}
