<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('game', ['user' => $user]);
    }
}
