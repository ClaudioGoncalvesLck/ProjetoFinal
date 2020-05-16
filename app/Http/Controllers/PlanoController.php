<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Plano;
use App\User;

class PlanoController extends Controller
{
    public function index() 
    {
        return view('pages.planos', ['planos' => Plano::all(), 'users' => User::all()]);    
    }



    public function addPlan() {
        $plano_id = request()->plano_id;
        
        try {
            $user = User::findOrFail(Auth::user()->id);
        } catch (\Throwable $th) {
            return redirect('/login');
        }
        
        // $tableplano = DB::table('plano_user')->get()->where('plano_id', $plano_id)->values('plano_id');
        // $tableuser = DB::table('plano_user')->get()->where('user_id', Auth::user()->id);


        // dd($tableplano, $tableuser);
        // if ($tableplano == $tableuser) {
            $user->planos()->attach($plano_id);
        // } else {
        //     die;
        // }
        
        // dd(count($user->planos()));
        // if ($user->planos()) {
        //     return redirect('/planos');
        // } else {
        //     $user->planos()->attach($plano_id);
        // }    

        // $tableplano = DB::table('plano_user')->get()->where('plano_id', $plano_id);
        // if ($table->where) {
        //     # code...
        // }
        // dd($tableplano, $tableuser);
        return view ('pages.checkout');
    }

    public function removePlan() {
        $user = User::findOrFail(Auth::user()->id);
        $plano_id = request()->plano_id;

        $user->planos()->detach($plano_id);


        // $user->planos()->each(function($plan) use ($plano_id){
        //     // dd($plan, $plano_id);
        //     if ($plan->id == $plano_id) { 
        //         $plan->delete(); 
        //     }
        // });

        return view ('pages.checkout');
    }
}
