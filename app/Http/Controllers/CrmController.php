<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrmController extends Controller
{
    public function show_schemes_page()
    {
        return view('crm.scheme.list');
    }

    public function show_vendors_page()
    {
        return view('crm.vendor.list');
    }

    public function show_referent_page()
    {
        return view('crm.referent.list');
    }

    public function show_payment_history_page()
    {
        return view('crm.payment.list');
    }

    public function show_applicant_page()
    {
        return view('crm.applicant.list');
    }
}
