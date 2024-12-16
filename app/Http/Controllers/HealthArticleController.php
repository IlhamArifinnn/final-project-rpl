<?php

namespace App\Http\Controllers;

use App\Models\HealthArticle;
use Illuminate\Http\Request;

class HealthArticleController extends Controller
{
    /**
     * Display a listing of the articles.
     */
    public function index()
    {
        $articles = HealthArticle::all();
        return view('health_articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new article.
     */
    public function create()
    {
        return view('health_articles.create');
    }

    /**
     * Store a newly created article in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'author' => 'required|string|max:255',
        ]);

        HealthArticle::create($request->only(['title', 'content', 'author']));

        return redirect()->route('health_articles.index')->with('success', 'Artikel berhasil ditambahkan.');
    }

    public function show(HealthArticle $healthArticle)
    {
        return view('health_articles.show', compact('healthArticle'));
    }


    /**
     * Show the form for editing the specified article.
     */
    public function edit(HealthArticle $healthArticle)
    {
        return view('health_articles.edit', compact('healthArticle'));
    }

    /**
     * Update the specified article in storage.
     */
    public function update(Request $request, HealthArticle $healthArticle)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'author' => 'required|string|max:255',
        ]);

        $healthArticle->update($request->only(['title', 'content', 'author']));

        return redirect()->route('health_articles.index')->with('success', 'Artikel berhasil diperbarui.');
    }

    /**
     * Remove the specified article from storage.
     */
    public function destroy(HealthArticle $healthArticle)
    {
        $healthArticle->delete();

        return redirect()->route('health_articles.index')->with('success', 'Artikel berhasil dihapus.');
    }
}
