<?php

namespace App\Http\Controllers;

use App\Models\matrice;
use Illuminate\Http\Request;

class MatriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('matrice.index');
    }


}
