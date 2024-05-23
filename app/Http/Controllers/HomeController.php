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
}
