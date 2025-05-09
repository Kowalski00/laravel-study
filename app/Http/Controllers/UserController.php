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


}
