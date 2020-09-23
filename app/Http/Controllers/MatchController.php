<?php

namespace App\Http\Controllers;

use App\Match;
use Illuminate\Http\Request;

class MatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matches = Match::all();
        return view('match.index', compact('matches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('match.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $a = new Match();
        $a->team_1 = $request->team_1;
        $a->team_2 = $request->team_2;
        if($request->hasFile('image')){
            
            $path = $request->file('image')->store('img', 'public');
            $a->image = $path;
        }
        $a->status = $request->status;
        $a->save();
        return redirect('/match');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Match  $match
     * @return \Illuminate\Http\Response
     */
    public function show(Match $match)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Match  $match
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
         $match = Match::findorFail($id);
         return view('match.edit', compact('match'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Match  $match
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $match)
    {
        $a  = Match::findorFail($match);
        $a = new Match();
        $a->team_1 = $request->team_1;
        $a->team_2 = $request->team_2;
        if($request->hasFile('image')){
            
            $path = $request->file('image')->store('img', 'public');
            $a->image = $path;
        }
        $a->status = $request->status;
        $a->score1 = $request->score1;
        $a->score2 = $request->score2;
        $a->result = $request->result;
        $a->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Match  $match
     * @return \Illuminate\Http\Response
     */
    public function destroy(Match $match)
    {
        //
    }
}
