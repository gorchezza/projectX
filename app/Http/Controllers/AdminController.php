<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\FirstHalf;
use App\Models\SecondHalf;
use Carbon\Carbon;


class AdminController extends Controller
{
    public function index(){
        $users = User::all();

        $date = Carbon::now()->format('d-m-Y');

        return view('admin.index', compact('users', 'date'));
    }

    public function showHalfView($user){
        $user = User::find($user);

        return view('admin.half', compact('user'));
    }

    
    public function firstHS($user){
        $points = FirstHalf::where('user_id', $user)->get();

        $date = Carbon::now()->format('d-m-Y');

        $user = User::find($user);

        return view('admin.first')->with('user', $user)->with('points', $points)->with('date', $date);
    }

    public function secondHS($user){
        $points = SecondHalf::where('user_id', $user)->get();

        $date = Carbon::now()->format('d-m-Y');
        
        $user = User::find($user);

        return view('admin.second')->with('user', $user)->with('points', $points)->with('date', $date);
    }

    public function firstUpdate(Request $request, $user){
        $validated = $request->validate([
            'math' => 'string',
            'en' => 'string',
            'cs' => 'string',
            'history' => 'string',
            'biology' => 'string',
            'literature' => 'string',
            'rus' => 'string',
            'geography' => 'string',
            'economics' => 'string',
            'design'  => 'string',
            'management'  => 'string',
        ]);

        FirstHalf::where('user_id', $user)->update([
            'math' => $validated['math'] ?? null,
            'en' => $validated['en'] ?? null,
            'cs' => $validated['cs'] ?? null,
            'history' => $validated['history'] ?? null,
            'biology' => $validated['biology'] ?? null,
            'literature' => $validated['literature'] ?? null,
            'rus' => $validated['rus'] ?? null,
            'geography' => $validated['geography'] ?? null,
            'economics' => $validated['economics'] ?? null,
            'design' => $validated['design'] ?? null,
            'management' => $validated['management'] ?? null,
        ]);
        
        return redirect()->route('admin.show.firsthalf', $user);

    }

    public function secondUpdate(Request $request, $user){
        $validated = $request->validate([
            'math' => 'string',
            'en' => 'string',
            'cs' => 'string',
            'history' => 'string',
            'biology' => 'string',
            'literature' => 'string',
            'rus' => 'string',
            'geography' => 'string',
            'economics' => 'string',
            'design'  => 'string',
            'management'  => 'string',
        ]);

        SecondHalf::where('user_id', $user)->update([
            'math' => $validated['math'] ?? null,
            'en' => $validated['en'] ?? null,
            'cs' => $validated['cs'] ?? null,
            'history' => $validated['history'] ?? null,
            'biology' => $validated['biology'] ?? null,
            'literature' => $validated['literature'] ?? null,
            'rus' => $validated['rus'] ?? null,
            'geography' => $validated['geography'] ?? null,
            'economics' => $validated['economics'] ?? null,
            'design' => $validated['design'] ?? null,
            'management' => $validated['management'] ?? null,
        ]);
        
        return redirect()->route('admin.show.secondhalf', $user);

    }
}