<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;

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

        public function editGame(Game $game)
        {
            return view('admin.game.edit')->with([
                'game' => $game
            ]);
        }


}
