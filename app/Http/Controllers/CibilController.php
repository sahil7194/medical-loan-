<?php

namespace App\Http\Controllers;

use App\Models\Cibil;
use Illuminate\Http\Request;

class CibilController extends Controller
{
    public function show_cibil_check_page()
    {
        return view('cibil.check');
    }
}
