<?php

namespace App\Http\Controllers;

use App\Game;
use App\User;
use Illuminate\Http\Request;

class userManagementController extends Controller
{
    public function index()
    {
        $user = User::all();

        return view('admin_panel.user.index')
            ->with('user', $user);

    }


    public function store(Request $request)
    {

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return redirect()->route('admin.user');
    }

    public function edit($id)
    {
        $user = User::find($id);

        return view('admin.user.edit')
            -> with('user', $user);


    }

    public function update(Request $request, User $user)
    {
        $test = User::find($request->id);
        $test->name=$request->name;
        $test->email=$request->email;
        $test->save();
        return redirect()->route('admin.user.list');
    }


    public function delete($id)
    {

        $user = User::find($id);

        return view('admin.user.delete')
            ->with('user', $user);
    }

    public function destroy(Request $request)
    {

        $user = User::find($request->id);
        $user->delete();

        return redirect()->route('admin.user');

    }


}
