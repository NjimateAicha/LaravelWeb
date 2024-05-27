<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $etudiants = Etudiant::all();
        return view('etudiant.index', ['etudiants' => $etudiants]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('etudiant.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validation des données soumises
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255|alpha',
            'prenom' => 'required|string|max:255|alpha',
            'cne' => 'required|string|unique:etudiants,cne|regex:/^[A-Z][0-9]{6}$/',
            'module1' => 'required|numeric|between:0,20',
            'module2' => 'required|numeric|between:0,20',
        ]);

        $latitude = mt_rand(27, 35); // Plage approximative des latitudes du Maroc
        $langitude = mt_rand(-13, -2); // Plage approximative des longitudes du Maroc
        // Création d'un nouvel étudiant avec les données validées
      $etudiant = Etudiant::create([
        'nom' => $validatedData['nom'],
        'prenom' => $validatedData['prenom'],
        'cne' => $validatedData['cne'],
        'note1' => $validatedData['module1'],
        'note2' => $validatedData['module2'],
        'langitude' => $langitude,
        'latitude' => $latitude,
    ]);

        // Redirection avec un message de succès
        return redirect()->route('etudiant.index')->with('success', 'Étudiant enregistré avec succès.');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function show(Etudiant $etudiant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function edit(Etudiant $etudiant)
    {
        return view('etudiant.edit', compact('etudiant'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Etudiant $etudiant)
    {
        // Validation des données reçues du formulaire
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'cne' => 'required|string|max:255',
            'note1' => 'required|numeric',
            'note2' => 'required|numeric',
        ]);

        // Mise à jour des informations de l'étudiant avec les données validées
        $etudiant->update($validatedData);

        // Redirection vers la page de la liste des étudiants avec un message de succès
        return redirect()->route('etudiant.index')->with('success', 'Étudiant mis à jour avec succès.');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Etudiant $etudiant)
    {
        // Suppression de l'étudiant
        $etudiant->delete();

        // Redirection vers la liste des étudiants avec un message de succès
        return redirect()->route('etudiant.index')->with('success', 'Étudiant supprimé avec succès.');
    }
}
