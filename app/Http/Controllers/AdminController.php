<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;
use App\User;

class AdminController extends Controller
{
        public function index(Request $request)
        {
                return view("admin.index");
        }

        public function createGame()
        {
                return view("admin.game.create");
        }

        public function getGames()
        {
            $games = Game::all();

            return view('admin.game.list')->with([
               'games' => $games
            ]);
        }
        public function update(Request $request, Game $game)
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
        $game = Game::find($game->id);
        $game->name = $request->get('name');
        $game->studio = $request->get('studio');
        $game->pegi = $request->get('pegi');
        $game->price = $request->get('price');
        $game->genre = $request->get('genre');
        $game->platform = $request->get('platform');
        $game->date = $request->get('date');
        $game->desc = $request->get('desc');

        $game->save();
        return redirect()->route("games.index");
    }
        public function edit(Game $game)
        {
            return view('admin.game.edit')->with([
                'games' => $game
            ]);
        }
    public function getuser()
    {
        $users = User::all();

        return view('admin.user.list')->with([
            'users' => $users
        ]);
    }
    public function editUser(User $user)
    {
        return view('admin.user.edit')->with([
            'users' => $user
        ]);
    }
    public function updateUser(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required'

        ]);
        $user = User::find($user->id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');


        $user->save();
        return redirect()->route("admin.user.list");
    }


}
