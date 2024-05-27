<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AproposDeMoiController extends Controller
{
    public function index()
    {
        return view('aProposDeMoi.index');
    }
}
