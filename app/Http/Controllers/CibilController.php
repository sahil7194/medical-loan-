<?php

namespace App\Http\Controllers;

use App\Http\Requests\Cibil\CibilCheckRequest;
use App\Models\Cibil;
use Illuminate\Http\Request;

class CibilController extends Controller
{
    public function show_cibil_check_page()
    {
        return view('cibil.check');
    }

    public function cibil_check(CibilCheckRequest $request)
    {
        $params = $request->validated();

        $score = rand(500, 900);

        $params['score'] = $score;

        $params['vendor']  = fake()->randomElement(["a","b"]);

        Cibil::create($params);

        return view('cibil.result', compact('score'));
    }
}
