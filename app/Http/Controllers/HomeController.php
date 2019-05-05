<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function test()
    {
        //$users = Auth::user();

        $user = User::find(15);

        //$user->delete();

        //$user = User::all();

        //$user = DB::table('cars')->get();

        $users = $user->cars;

        //dd($users->cars());

        //dd($user->count());

        return view('test', ['variables' => $users]);
    }


}