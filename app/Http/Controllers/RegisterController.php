<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Hash; 



class RegisterController extends Controller
{
   Public function Store(Request $request) 
   {
    $input = $request ->all();

    User::create([
        'name' => $input['name'],
        'email' => $input['email'],
        'password' => Hash::make($input['password'])   
    ])
    return response() ->json(['status' => true,
                               'message' => "Registration Successful"
    ])
   }
}
