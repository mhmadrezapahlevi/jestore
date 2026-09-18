<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $games = Game::with('packages')->get();
        $popularGames = Game::with('packages')->where('is_popular', true)->get();
        
        // DEBUG - Uncomment untuk cek data
        // dd($games, $popularGames);
        
        return view('home', compact('games', 'popularGames'));
    }
}