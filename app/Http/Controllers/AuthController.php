<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('deconnexion');
    }

    public function inscription(){
        return view('auth.inscription');
    }
    public function inscriptionSave(Request $request)
{
    // Validation des données du formulaire
    Validator::make($request->all(), [
        'name' => 'required',
        'firstname' => 'required',
        'email' => 'required|email',
        'password' => 'required|confirmed'
    ])->validate();

    // Initialisation de la variable pour le chemin de l'image
    $pdp = null;

    // Vérification si une image a été téléchargée
    if ($request->hasFile('pdp')) {
        $image = $request->file('pdp');

        // Génération d'un nom de fichier unique
        $filename = time() . '.' . $image->getClientOriginalExtension();

        // Déplacement de l'image téléchargée vers le dossier public/images
        $image->move(public_path('images'), $filename);

        // Stockage du chemin de l'image dans la variable $pdp
        $pdp = 'images/' . $filename;
    }

    // Création d'un nouvel utilisateur avec les données du formulaire et le chemin de l'image
    User::create([
        'pdp' => $pdp,
        'name' => $request->name,
        'firstname' => $request->firstname,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'type' => '0'
    ]);

    // Redirection vers la page de connexion
    return redirect()->route('connexion');
}
    public function connexion(){
        return view('auth.connexion');
    }
    public function connexionAction(Request $request)
    {
        Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ])->validate();

        if (!Auth::attempt($request->only('email', 'password'), $request->boolean('remember'))) {
            throw ValidationException::withMessages([
                'email' => trans('Veuillez reverifier votre entrer SVP !!!')
            ]);
        }

        $request->session()->regenerate();

        if(auth()->user()->type=='admin'){
            return redirect()->route('admin/accueil');
        }else{
            return redirect()->route('accueil');
        }

    }
    public function deconnexion(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/connexion');
    }
}
