<?php

namespace App\Http\Controllers\Auth;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // show the login form
    public function loginForm():View
    {
        return view("auth.login");
    }


    // connect the user
    public function login(Request $request)
    {
        //validate the incoming http resquest
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password'=> ['required', 'string']
        ]);


        //attempts to log in user
        if(Auth::attempt($credentials, (bool) $request->remember))
        {
            // regenerate the session ID for the user
            $request->session()->regenerate();

            return redirect(route('home.index'));
        }

        //redirect the user back to the previous page
        return back()->withErrors([
            'email' => 'Identifiants erronés.'
        ])->onlyInput('email');
    }


    public function logout(Request $request)
    {
        //log out the user
        Auth::logout();

        // invalidate the session
        $request->session()->invalidate();

        // regenerate the CRSF token
        $request->session()->regenerateToken();

        //
        return redirect(route('home.index'));
    }
}
