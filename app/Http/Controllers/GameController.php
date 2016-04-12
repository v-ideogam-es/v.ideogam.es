<?php

namespace App\Http\Controllers;

use App\Game;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Organization;
use Carbon\Carbon;
use Flash;
use Illuminate\Http\Request;
use Redirect;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('game.index')->withGames(Game::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $developers = Organization::developer()->orderBy('name', 'asc')->get();

        return view('game.create', compact('developers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Game::create($request->except('_token'));
        //(new Game)->fill($request->all())->save();
        //Game::create($request->only('name', 'description', 'photo', 'url', 'developer_id'));

        $game = Game::create($request->all());

        return redirect()->route('game.index')
                         ->with('success', sprintf('Successfully created "%s".', $game->name));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('game.show')->withGame(Game::findOrFail($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $developers = Organization::developer()->orderBy('name', 'asc')->get();
        $game       = Game::findOrFail($id);

        return view('game.edit', compact('developers', 'game'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $game = Game::findOrFail($id);
        
        $game->update($request->all());

        return redirect()->route('game.index')
                         ->with('success', sprintf('Successfully updated "%s".', $game->name));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
