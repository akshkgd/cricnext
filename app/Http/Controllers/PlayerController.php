<?php

namespace App\Http\Controllers;

use App\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $players = Player::all();
        return view('player.index', compact('players'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('player.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $a = new  Player;
        $a->name  = $request->name;
        $a->age  = $request->age;
        if ($request->hasFile('image')) {

            $path = $request->file('image')->store('img', 'public');
            $a->image = $path;
        }
        $a->desc  = $request->desc;
        $a->team_id  = $request->team_id;

        $a->is_captian  = $request->is_captian;
        $a->matches  = $request->matches;
        $a->innings  = $request->innings;
        $a->runs  = $request->runs;
        $a->highest  = $request->highest;
        $a->batting_avg  = $request->batting_avg;
        $a->sr  = $request->sr;
        $a->hundred  = $request->hundred;
        $a->fifty  = $request->fifty;
        $a->wickets  = $request->wickets;
        $a->balls  = $request->balls;
        $a->bowling_avg  = $request->bowling_avg;
        $a->economy  = $request->economy;
        $a->w5  = $request->w5;
        $a->w10  = $request->w10;

        $a->save();
        return redirect('/player');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function show(Player $player)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function edit($player)
    {
        $player = Player::findorFail($player);
        return view('player.edit', compact('player'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $a = Player::findorFail($id);
        $a->name  = $request->name;
        $a->age  = $request->age;
        if ($request->hasFile('image')) {

            $path = $request->file('image')->store('img', 'public');
            $a->image = $path;
        }
        $a->desc  = $request->desc;
        $a->team_id  = $request->team_id;

        $a->is_captian  = $request->is_captian;
        $a->matches  = $request->matches;
        $a->innings  = $request->innings;
        $a->runs  = $request->runs;
        $a->highest  = $request->highest;
        $a->batting_avg  = $request->batting_avg;
        $a->sr  = $request->sr;
        $a->hundred  = $request->hundred;
        $a->fifty  = $request->fifty;
        $a->wickets  = $request->wickets;
        $a->balls  = $request->balls;
        $a->bowling_avg  = $request->bowling_avg;
        $a->economy  = $request->economy;
        $a->w5  = $request->w5;
        $a->w10  = $request->w10;

        $a->save();
        return redirect('/player');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function destroy($player)
    {
        Player::destroy($player);
        return redirect('/player');
    }
}
