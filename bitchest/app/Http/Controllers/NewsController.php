<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all(); // Récupérez toutes les actualités de votre base de données
        return view('admin.news', ['news' => $news]);
    }
}
