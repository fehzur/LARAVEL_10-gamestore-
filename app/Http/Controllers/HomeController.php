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
        $games = Game::orderByDesc('created_at')->get();
        return view('accueil', compact('games'));
    }

    public function adminHome(){
        return view('dashboard');
    }
}
