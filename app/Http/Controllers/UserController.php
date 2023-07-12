<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\UserPoint;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('user.index', compact('users'));
    }


    public function show($user){
        $points = UserPoint::where('user_id', $user)->get();

        $user = User::find($user);

        return view('user.show')->with('user', $user)->with('points', $points);
    }
}
