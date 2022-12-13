<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:user,email',
            'password' => 'required|min:5|max:12',
        ]);
    }
}
