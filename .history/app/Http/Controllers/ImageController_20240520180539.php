<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
        
    // }
    public function index()
{
    $images = Image::all();
    return view('image.index', compact('images'));
}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    $request->validate([
        'image_file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Valider les images avec les extensions jpeg, png, jpg, gif et une taille maximale de 2 Mo
    ]);

    // Récupérer le fichier téléchargé
    $image = $request->file('image_file');

    // Générer un nom unique pour le fichier
    $name = $image->getClientOriginalName();
    $path = $request->file('image_file')->storeAs('public/images', $name);

    // Si vous souhaitez enregistrer le chemin d'accès dans la base de données, par exemple :
    // Image::create(['path' => $path]);

    return redirect()->route('image.create')->with('success', 'L\'image a été enregistrée avec succès.');
}



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
{
    // Supprimer l'image de la base de données
    $image->delete();

    // Supprimer le fichier image du stockage
    Storage::delete('public/images/' . $image->nom);

    return redirect()->back()->with('success', 'Image supprimée avec succès');
}

}

