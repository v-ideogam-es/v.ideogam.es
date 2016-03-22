<?php

namespace App\Http\Controllers;

use App\Developer;
use App\Organization;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Game;
use App\Http\Requests;
use App\Http\Controllers\Controller;

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

        return view('games.index', compact('games'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $developers = Organization::developer()->orderBy('name', 'asc')->get();

        return view('games.create', compact('developers'));
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
        //
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
        //
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
