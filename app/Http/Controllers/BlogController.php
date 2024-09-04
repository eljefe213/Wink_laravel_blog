<?php

namespace App\Http\Controllers;

use Wink\WinkPost; // Assurez-vous que le modèle WinkPost est importé

class BlogController extends Controller
{
    public function index()
    {
        // Récupérer 5 articles paginés
        $posts = WinkPost::orderBy('created_at', 'desc')->paginate(5);

        // Retourner la vue avec les articles paginés
        return view('blog.index', compact('posts'));
    }
    public function show($slug)
    {
        // Récupérer l'article par son slug
        $post = WinkPost::where('slug', $slug)->firstOrFail();

        return view('blog.show', compact('post'));
    }
}

