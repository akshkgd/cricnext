<?php

namespace App\Http\Controllers;

use App\Match;
use App\Player;
use App\Team;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function welcome(){
        $batsman = Player::orderBy('runs', 'desc')->take(3)->get();
        $bowlers = Player::orderBy('wickets', 'desc')->take(3)->get();
        $teams = Team::orderBy('won', 'desc')->take(3)->get();
        $live = Match::where('status', 1)->latest()->get();
        $upcoming = Match::where('status', 0)->latest()->get();
        $results = Match::where('status', 2)->latest()->take('3')->get();
        return view('welcome', compact('batsman', 'bowlers','teams', 'live', 'upcoming', 'results'));

    }

    public function teams()
    {
        $teams = Team::all();
        return view ('teams', compact('teams'));
    }

    public function team_details($id)
    {
        $team = Team::findorFail($id);
        $players = Player::where('team_id', $id)->get();
        return view('team_details', compact('team', 'players'));
    }

    public function Player()
    {
        $players = Player::all();
        return view('players', compact('players'));
    }

    public function player_details($id)
    {
        $player = Player::findorFail($id);
        return view('player_details', compact('player'));
    }
}

