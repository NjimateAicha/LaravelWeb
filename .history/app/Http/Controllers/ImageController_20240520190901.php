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
    


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
{
    $images = Image::all();
    return view('image.create', compact('images'));
}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    $request->validate([
        'image_file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Valider les images avec les extensions jpeg, png, jpg, gif et une taille maximale de 2 Mo
    ]);

    $size = $request->file('image_file')->getSize();
    $name = $request->file('image_file')->getClientOriginalName();
    $type = $request->file('image_file')->getClientOriginalExtension();
    $bin_img = file_get_contents($request->file('image_file')->getRealPath());

    $image = Image::create([
        'nom' => $name,
        'type' => $type,
        'size' => $size,
        'bin_img' => $bin_img,
    ]);

    $request->file('image_file')->storeAs('storage/images/', $name);

    // Redirection avec un message de succès
    return redirect()->route('image.create')->with('success', 'image est enregistré avec succès.');

}
if(isset($data['image'])) {
    $imagePath = $data['image']->store('public/assets/img/photos');
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

