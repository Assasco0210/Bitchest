<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User; // Assurez-vous que le chemin vers le modèle User est correct

class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function showRegistrationForm()
    {
        return view('inscription');
    }

    public function handleRegistration(Request $request)
    {
        // Validez les données du formulaire
        $validatedData = $request->validate([
            'nom' => 'required|max:255',
            'prenom' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'username' => 'required|max:255|unique:users',
            'password' => 'required|min:8',
            'photo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'piece_identite' => 'required|mimes:jpg,jpeg,png,pdf|max:2048',
            'preuve_residence' => 'required|mimes:jpg,jpeg,png,pdf|max:2048',
            'carte_releve' => 'required|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);

        // Créez un nouvel utilisateur avec les données validées
        $user = new User;
        $user->nom = $validatedData['nom'];
        $user->prenom = $validatedData['prenom'];
        $user->email = $validatedData['email'];
        $user->username = $validatedData['username'];
        $user->password = Hash::make($validatedData['password']);
        // Ajoutez les autres champs si nécessaire
        $user->save();

        // Connectez l'utilisateur
        Auth::login($user);

        // Redirigez l'utilisateur vers la page de connexion avec un message de succès
        return redirect('/connexion')->with('status', 'Inscription réussie! Vous êtes maintenant connecté.');
    }

    public function showLoginForm()
{
    return view('connexion');
}

    public function handleLogin(Request $request)
{
    // Validez les données du formulaire
    $validatedData = $request->validate([
        'username' => 'required|max:255',
        'password' => 'required',
    ]);

    // Essayez de connecter l'utilisateur
    if (Auth::attempt($validatedData)) {
        // Si la connexion réussit, vérifiez si l'utilisateur est un administrateur
        if (Auth::user()->role == 'admin') {
            // Si l'utilisateur est un administrateur, redirigez-le vers le tableau de bord de l'administrateur
            return redirect()->route('admin.dashboard');
        } else {
            // Si l'utilisateur n'est pas un administrateur, redirigez-le vers sa page de profil
            return redirect()->route('profile', ['user' => Auth::user()]);
        }
    } else {
        // Si la connexion échoue, redirigez l'utilisateur vers la page de connexion avec un message d'erreur
        return redirect('/connexion')->withErrors([
            'username' => 'Les informations d\'identification fournies ne correspondent pas à nos enregistrements.',
        ]);
    }
}
    
}
