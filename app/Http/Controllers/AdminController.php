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

        public function editGame(Request $request)
        {
                $search = $request->get("id");
                if($search){
                        $game = Game::find($search);
                } else {
                        return redirect()->back();
                }

            return view('admin.game.edit')->with([
                'game' => $game
            ]);
        }

        public function showGame(Request $request) {
                $search = $request->get("id");
                if($search){
                        $game = Game::find($search);
                } else {
                        return redirect()->back();
                }

                return view('admin.game.show')->with('game', $game);
        }

}
