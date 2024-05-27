<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\map;
use Illuminate\Http\Request;

class MapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $etudiants = Etudiant::all();
        return view('map.index', ['etudiants' => $etudiants]);
    }
}
