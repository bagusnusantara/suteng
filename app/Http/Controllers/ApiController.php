<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ApiController extends Controller
{
    public function getDataJM(){
        $user= User::all();
        return response()->json($user);
    }
}
