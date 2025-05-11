<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller {

    public function index() {
        $users = User::all();
        return view('users.index',[
            'greeting' => 'Hello World!'
            , 'users' => $users
        ]);
    }

    public function getUser(User $user) {
        return view('users.show', [
            'user' => $user
        ]);
    }

    public function create() {
        return view('users.create');
    }

    public function store(Request $request) {
        $input = $request->validate([
            'name' => 'required'
            , 'email' => 'required|email'
            , 'password' => 'required|min:3'
        ]);
        User::create($input);
        return redirect()->back();
    }
}
