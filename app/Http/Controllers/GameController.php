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
        return view("game.index", ["games" => $game, "search" => $search]);

    }


    public function create()
    {
        return view('game.create');
    }


    public function store(Request $request)
    {
        $request->validate([
                'name' => 'required',
                'studio' => 'required',
                'pegi' => 'required',
                'price' => 'required',
                // 'pht' => 'required',
                // 'phm' => 'required',
                'description' => 'required'
        ]);

        Game::create($request->all());

        return redirect()->route('games.index')
            ->with('success','Game created successfully.');
    }


    public function show(Game $game)
    {
        return view('game.show')->with('games', $game);
    }


    public function edit(Game $game)
    {
        return view('game.edit')->with([
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
            // 'pht' => 'required',
            // 'phm' => 'required',
            'description' => 'required'
        ]);

        $game = Game::find($game->id);
        $game->name = $request->get('name');
        $game->studio = $request->get('studio');
        $game->pegi = $request->get('pegi');
        $game->price = $request->get('price');
        // $game->pht = $request->get('pht');
        // $game->phm = $request->get('phm');
        $game->desc = $request->get('description');
        $game->nmoy = $request->get('note');

        $game->save();
        return redirect()->route("game.index");
    }

    public function destroy(Game $game)
    {
        $game->delete();

        return redirect()->route('game.index')
            ->with('success','Jeu supprimé.');
    }
}
