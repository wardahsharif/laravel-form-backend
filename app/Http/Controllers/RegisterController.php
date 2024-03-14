<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;



class RegisterController extends Controller
{
   Public function store(Request $request) 
   {
    $input = $request ->all();

    User::create([
        'username' => $input['username'],
        'email' => $input['email'],
        'password' => Hash::make($input['password'])   
    ]);
    return response() ->json(['status' => true,
                               'message' => "Registration Successful"
]);
   }
}


