<?php

namespace App\Http\Controllers;

use App\Models\Plano;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Redirect;

class PlanoController extends Controller
{
 public function index()
 {
  return view('pages.planos', ['planos' => Plano::all(), 'users' => User::all()]);
 }

 public function addPlan()
 {
  $plano_id = request()->plano_id;

  try {
   $user = User::findOrFail(Auth::user()->id);
  } catch (\Throwable $th) {
   return redirect('/login');
  }

//   dd($user->planos()->where('planos.id', $plano_id)->exists());

  $hasTask = $user->planos()->where('planos.id', $plano_id)->exists();

  if ($hasTask == false) {
   $user->planos()->attach($plano_id);
  } else {
   return Redirect::back();
  }

  return view('pages.checkout');
 }

 public function removePlan()
 {
  $user     = User::findOrFail(Auth::user()->id);
  $plano_id = request()->plano_id;

  $user->planos()->detach($plano_id);
  return view('pages.removed');
 }
}
