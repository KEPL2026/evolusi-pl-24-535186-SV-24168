<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MovieController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('search', 'marvel');
        $response = Http::withoutVerifying()->get("https://api.tvmaze.com/search/shows?q={$query}");
        $movies = $response->json() ?? [];

        return view('movies', compact('movies', 'query'));
    }

    public function show($id)
    {
        $response = Http::withoutVerifying()->get("https://api.tvmaze.com/shows/{$id}");
        $movie = $response->json();

        if (!$response->successful() || empty($movie)) {
            abort(404, 'Film tidak ditemukan.');
        }

        return view('show', compact('movie'));
    }
}