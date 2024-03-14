<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;



class LoginController extends Controller
{
   
    Public function check(Request $request)
    {
        $credentials = $request -> validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials))
        {
            return response()->json(['status' => true,
                                      'message' => "Success"
        ]);
        }
        return response()->json(['status' => false,
                                  'message' => "Fail"
    ]);
    }
}
