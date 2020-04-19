<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Plano;

class PlanoController extends Controller
{
    public function index() 
    {
        return view('pages/home', ['planos' => Plano::all()]);    
    }
    
}
