<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $users = User::with('plano')->get();

        // foreach ($users as $user => $value) {
        //     # code...
        // }
        $userid = Auth::id();

        return view('pages.home', ['users' => User::with('planos')->where('id', $userid)->get()]);

    }


}
