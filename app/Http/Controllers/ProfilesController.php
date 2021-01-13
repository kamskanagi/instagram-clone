<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class ProfilesController extends Controller
{
    //

    public function index($user)
    {
       // dd(User::find($user));
       $user = User::find($user);  // this will find the user
        return view('home', ['user' => $user]);
    }
}
