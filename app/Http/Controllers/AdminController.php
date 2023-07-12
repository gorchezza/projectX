<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserPoint;

class AdminController extends Controller
{
    public function index(){
        $users = User::all();
        return view('admin.index', compact('users'));
    }

    public function show($user){
        $points = UserPoint::where('user_id', $user)->get();

        $user = User::find($user);

        return view('admin.show')->with('user', $user)->with('points', $points);
    }

    public function update($user) {
        return '456';
    }

    public function create() {
        return '456';
    }

}