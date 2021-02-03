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

        return view('game.index')->with([
            'games' => $games
        ]);

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
                'genre' => 'required',
                'platform' => 'required',
                'date' => 'required',
                'desc' => 'required'
        ]);

        Game::create($request->all());

        return redirect()->route('admin.index')
            ->with('success','Game created successfully.');
    }

    public function show(Game $game)
    {
        return view('game.show')->with('game', $game);
    }

    public function edit($id)
    {
        $game = Game::find($id);

        return view('admin.game.edit')
            -> with('game', $game);
    }


    public function update(Request $request, Game $game)
    {

        $request->validate([
            'id' => 'required',
        ]);

        $id = $request->get('id');
        $test = Game::find($id);
        $test->name=$request->name;
        $test->price=$request->price;
        $test->studio=$request->studio;
        $test->pegi=$request->pegi;
        $test->desc=$request->desc;
        $test->genre=$request->genre;
        $test->save();
        return redirect()->route('admin.game.list');
    }


    public function destroy(Game $game)
    {
        $game->delete();

        return redirect()->back()->with('success','Jeu supprimé.');
    }
}
