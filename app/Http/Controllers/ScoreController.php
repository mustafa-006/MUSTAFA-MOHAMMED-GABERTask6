<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ScoreController extends Controller
{
    public function addScore(Request $request)
    {
        
        $currentScore = $request->session()->get('score', 0);
        $newScore = $currentScore + 20;

     
        $request->session()->put('score', $newScore);

       
        return view('score', ['score' => $newScore]);
    }
}
