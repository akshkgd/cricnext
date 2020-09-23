<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::all();
        return view ('team.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('team.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $a = new  Team;
        $a->name  = $request->name;
        
        if($request->hasFile('logo')){
            
            $path = $request->file('logo')->store('img', 'public');
            $a->logo = $path;}
         
        $a->played  = $request->played;
        
        $a->won  = $request->won;
        
        $a->lose  = $request->lose; 
        $a->save();
        return redirect('/team');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit($team)
    {
        $team = Team::findorFail($team);
        return view('team.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $a = Team::findorFail($id);
        $a->name  = $request->name;
        
        if($request->hasFile('logo')){
            
            $path = $request->file('logo')->store('img', 'public');
            $a->logo = $path;
        }
            $a->played = $request->played;
            $a->won = $request->won;
            $a->lose = $request->lose;
            $a->save();
            return redirect('/team');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Team::destroy($id);
        return redirect('/team');
    }
}
