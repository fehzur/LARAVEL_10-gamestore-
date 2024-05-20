<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $games=Game::orderBy('created_at', 'DESC')->get();
        return view('game.index', compact('games'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('game.ajout');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Valider la requête pour s'assurer que tous les champs sont présents et valides
        $request->validate([
            'title' => 'required|string|max:255',
            'categorie' => 'required|string|max:255',
            'date_sortie' => 'required|string|max:255',
            'plateforme' => 'required|string|max:255',
            'product_code' => 'required|string|max:50',
            'description' => 'required|string',
            'game' => 'required|file|mimes:jpg,jpeg,png,webm', // Exemple de validation pour les fichiers d'image et vidéo
        ]);
    
        $game = null;
    
        // Vérification si une image a été téléchargée
        if ($request->hasFile('game')) {
            $image = $request->file('game');
    
            // Génération d'un nom de fichier unique
            $filename = time() . '.' . $image->getClientOriginalExtension();
    
            // Déplacement de l'image téléchargée vers le dossier public/images
            $image->move(public_path('images/games/'), $filename);
    
            // Stockage du chemin de l'image dans la variable $game
            $game = $filename;
        }
    
        // Créer le produit avec les données du formulaire
        Game::create([
            'title' => $request->input('title'),
            'product_code' => $request->input('product_code'),
            'categorie' => $request->input('categorie'),
            'date_sortie' => $request->input('date_sortie'),
            'plateforme' => $request->input('plateforme'),
            'description' => $request->input('description'),
            'game' => $game, // Utilisez le chemin de l'image dans le dossier public/images
        ]);
    
        return redirect()->route('admin/game')->with('success', 'Product added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $game=Game::findOrfail($id);

        return view('game.afficher', compact('game'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $game= game::findOrfail($id);

        return view('game.modification', compact('game'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $game=game::findOrfail($id);
        $game->update($request->all());
        return redirect()->route('admin/game')->with('succes', 'Jeux mise à jours avec succes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $game= game::findOrFail($id);
        $game->delete();
        return redirect()->route('admin/game')->with('succes', 'Supprimation effectuer');
    }
    public function search(Request $request)
    {
        $query = $request->input('query');

        $games = Game::where('id', $query)
            ->orWhere('title','LIKE', "%{$query}%")
            ->orWhere('categorie', 'LIKE', "%{$query}%")
            ->orWhere('plateforme', 'LIKE', "%{$query}%")
            ->orWhere('product_code', 'LIKE', "%{$query}%")
            ->orWhere('description', 'LIKE', "%{$query}%")
            ->orWhere('created_at', 'LIKE', "%{$query}%")
            ->get();

            return view('game.resultat', [
                'games' => $games,
                'query' => $query
            ]);
    }
}
