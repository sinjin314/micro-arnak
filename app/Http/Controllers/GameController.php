<?php

namespace App\Http\Controllers;

use App\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{

    public function index(Request $request)
    {

        $search = $request->get("search");
        if($search){
            $game = Game::where('name', 'like', '%'.$search.'%')->orWhere('pegi', 'like', '%' . $search . '%')->orWhere('studio', 'like', '%' . $search . '%')->get();
        }else{
            $game = Game::all();
        }
        return view("games.index", ["games" => $game, "search" => $search]);

    }


    public function create()
    {
        return view('games.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'studio' => 'required',
            'pegi' => 'required',
            'price' => 'required',
            'pht' => 'required',
            'phm' => 'required',
            'desc' => 'required',
            'nmoy' => 'required'

        ]);

        Game::create($request->all());

        return redirect()->route('game.index')
            ->with('success','Game created successfully.');
    }


    public function show(Game $game)
    {
        return view('games.show')->with('games', $game);
    }


    public function edit(Game $game)
    {
        return view('games.edit')->with([
            'game' => $game
        ]);
    }


    public function update(Request $request, Game $game)
    {
        $request->validate([
            'name' => 'required',
            'studio' => 'required',
            'pegi' => 'required',
            'price' => 'required',
            'pht' => 'required',
            'phm' => 'required',
            'desc' => 'required',
            'nmoy' => 'required'
        ]);
        $game = Game::find($game->id);
        $game->name = $request->get('name');
        $game->studio = $request->get('studio');
        $game->pegi = $request->get('pegi');
        $game->price = $request->get('price');
        $game->pht = $request->get('pht');
        $game->phm = $request->get('phm');
        $game->desc = $request->get('desc');
        $game->nmoy = $request->get('nmoy');

        $game->save();
        return redirect()->route("games.index");
    }


    public function destroy(Game $game)
    {
        $game->delete();

        return redirect()->route('games.index')
            ->with('success','Jeu supprimé.');
    }
}
