<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        // Je doit appeler ma bdd
        // return view('blog')->with(['series' => $this->series]);
        $series = Serie::all();
        return view('blog', compact('series'));
        // return view('blog')->with(['series' => $series]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return view('series/create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string',
            'annees' => 'required|numeric',
            'genre' => 'required|string',
            'synopsis' => 'required|string'
        ]);
        $serie = [

            'nom' => $request->input('nom'),
            'annes' => $request->input('annees'),
            'pays' => $request->input('pays'),
            'genre' => $request->input('genre'),
            'synopsis' => $request->input('synopsis')
        ];
            // if ($request->hasFile('image')) {
            //     // Valider le fichier image
            //     $validatedData = $request->validate([
            //         'image' => 'image|mimes:jpeg,png,jpg,gif'
            //     ]);



        ;
        Serie::create($serie);
        return redirect()->route('blog.index');
    }



    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Récupérer une seule série avec son nom
        $serie = Serie::where('nom', $id)->firstOrFail();

        // Retourner la vue avec les détails de la série
        return view('series.show', ['serie' => $serie]);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($nom)
    {
        // Supprimer un utilisateur spécifique
        $serie = Serie::where('nom', $nom)->firstOrFail();
        $serie->delete();
        return redirect()->route('blog.index');
    }
}
