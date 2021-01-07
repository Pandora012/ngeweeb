<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function edit($id){
        $user=User::find($id);
        return view('profile',['user'=>$user]);
    }
}
