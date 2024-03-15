<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Assurez-vous d'avoir ce modèle

class UserTableController extends Controller
{
    public function showUserTable()
    {
        
        // Récupérer tous les utilisateurs de la base de données
        $users = User::all();

        // Passer les utilisateurs à la vue
        return view('user-table', ['users' => $users]);
    }
}
