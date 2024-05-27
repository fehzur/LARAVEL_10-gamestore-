<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class HomeController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function index(){
        $games = Game::all();  // On récupère tous les jeux sans les trier
        return view('accueil', compact('games'));
    }
    

    public function adminHome(){
        return view('dashboard');
    }
    public function userShow(string $id)
    {
        $games=Game::findOrfail($id);

        return view('games', compact('games'));
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

            return view('resultat', [
                'games' => $games,
                'query' => $query
            ]);
    }
}
