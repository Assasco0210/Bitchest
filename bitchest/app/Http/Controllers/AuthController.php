<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Models\User;
use App\Mail\ResetPasswordMail;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function showForgotPasswordForm()
    {
        return view('forgot-password');
    }

    public function resetPassword(Request $request)
    {
        // Valider la demande
        $request->validate([
            'username' => 'required|exists:users,username',
            'new_password' => 'required|confirmed'
        ]);

        // Trouver l'utilisateur
        $user = User::where('username', $request->username)->first();

        // Vérifier le token de réinitialisation
        $reset = DB::table('password_resets')->where('email', $user->email)->first();
        if (!$reset || !Hash::check($request->token, $reset->token)) {
            return back()->withErrors(['token' => 'Le token de réinitialisation est invalide.']);
        }

        // Réinitialiser le mot de passe
        $user->password = Hash::make($request->new_password);
        $user->save();

        // Supprimer le token de réinitialisation
        DB::table('password_resets')->where('email', $user->email)->delete();

        return redirect('/connexion')->with('status', 'Votre mot de passe a été réinitialisé avec succès!');
    }

    public function createUser(Request $request)
{
    // Valider la demande
    $request->validate([
        'username' => 'required|unique:users,username',
        'email' => 'required|email|unique:users,email'
    ]);

    // Générer un mot de passe temporaire
    $temporaryPassword = Str::random(10);

    // Créer un nouvel utilisateur
    $user = new User;
    $user->username = $request->username;
    $user->email = $request->email;
    $user->password = Hash::make($temporaryPassword);
    $user->save();

    // Envoyer le mot de passe temporaire à l'administrateur
    Mail::to('jeanpaulk701@gmail.com')->send(new ResetPasswordMail($user, $temporaryPassword));

    return redirect('/admin')->with('status', 'Un nouvel utilisateur a été créé avec succès et le mot de passe temporaire a été envoyé à l\'administrateur!');
}
}
