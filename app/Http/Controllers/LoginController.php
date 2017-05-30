<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     *
     * Logs the user in.
     */
    public function authenticate() {
        if (Auth::attempt(['email' => request()->input('email'), 'password' => request()->input('password')]))
        {
            return redirect()->intended('users');
        }
        else
        {
            return view('login');
        }
    }

    /**
     * @return mixed
     *
     * Logs the user out.
     */
    public function logout()
    {
        Auth::logout();

        return Redirect::away('login');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     *
     * Returns the login view.
     */
    public function login()
    {
        return view('login');
    }
}
