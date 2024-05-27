<?php

namespace App\Http\Controllers;

use App\Models\charts;
use App\Models\Etudiant;
use Illuminate\Http\Request;

class ChartsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $etudiants = Etudiant::all();
        $data = $etudiants->map(function ($etudiant) {
            return [
                'nom' => $etudiant->nom,
                'moyenne' => $etudiant->moyenne()
            ];
        });

        return view('charts.index', ['data' => $data]);
    }

}