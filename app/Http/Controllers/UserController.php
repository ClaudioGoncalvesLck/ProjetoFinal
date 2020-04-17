<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class UserController extends Controller
{
    public function index() {
        return DB::table('Users')->where('id','<=',1)->get();
    }
}
