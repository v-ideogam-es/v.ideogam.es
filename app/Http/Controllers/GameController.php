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
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['description', 'name', 'photo', 'url', 'publisher_id', 'created_at', 'updated_at'];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $games = Game::all();

        return view('game.index', compact('games'));
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
        $game               = new Game;
        $game->name         = $request->name;
        $game->description  = $request->description;
        $game->developer_id = $request->developer_id;
        $game->created_at   = Carbon::now();
        $game->updated_at   = null;
        $game->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $game               = Game::findOrFail($id);
        $game->name         = $request->name;
        $game->description  = $request->description;
        $game->developer_id = $request->developer_id;
        $game->updated_at   = Carbon::now();
        $game->save();

        # Flash::success(sprintf('Successfully updated "%s".', $game->name));

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
