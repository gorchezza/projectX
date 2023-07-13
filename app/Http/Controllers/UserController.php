<?php

namespace App\Http\Controllers;

use App\Models\FirstHalf;
use App\Models\SecondHalf;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        
        $date = Carbon::now()->format('d-m-Y');

        return view('user.index', compact('users', 'date'));
    }

    public function showHalfView($user){
        $user = User::find($user);

        return view('user.half', compact('user'));
    }

    
    public function firstHS($user){
        $points = FirstHalf::where('user_id', $user)->get();

        $user = User::find($user);

        $date = Carbon::now()->format('d-m-Y');

        return view('user.first')->with('user', $user)->with('points', $points)->with('date', $date);
    }

    public function secondHS($user){
        $points = SecondHalf::where('user_id', $user)->get();

        $user = User::find($user);

        $date = Carbon::now()->format('d-m-Y');

        return view('user.second')->with('user', $user)->with('points', $points)->with('date', $date);
    }
}
