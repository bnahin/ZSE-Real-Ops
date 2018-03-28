<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request,
    Illuminate\Support\Facades\Session,
    \VatsimSSO;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login()
    {
        $returnUrl = url("validate");
        VatsimSSO::login(
            $returnUrl, function ($key, $secret, $url) {
            Session::put('vatsimAuth', compact('key', 'secret'));
            header('Location: ' . $url);
        }, function ($e) {
            throw $e;
        });
    }

    public function validateLogin(Request $request)
    {
        $session = Session::get('vatsimAuth');

        VatsimSSO::validate(
            $session['key'], $session['secret'],
            $request->input('oauth_verifier'), function ($user, $request) {
            Session::forget('vatsimAuth');

            // Process user data
            dd($request, $user);

        });
    }
}
