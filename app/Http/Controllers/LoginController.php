<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request,
    Illuminate\Support\Facades\Session,
    Illuminate\Support\Facades\Auth,
    App\User,
    \VatsimSSO;

class LoginController extends Controller
{
    protected $redirectTo = '/';

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
        $status = true;

        VatsimSSO::validate(
            $session['key'], $session['secret'],
            $request->input('oauth_verifier'), function ($user, $request) {
            Session::forget('vatsimAuth');

            // Process user data
            if ($request->result == "success") {
                //If user exists: log in. Redirect home.
                //If user doesn't exist: Create. Log in. Redirect home.
                $vatsimID = $user->id;
                $firstName = $user->name_first;
                $lastName = $user->name_last;
                $email = $user->email;
                $atcRating = $user->rating->short;
                $pilotRating = $user->pilot_rating->rating;
                $isATC = User::isATC($vatsimID);

                $userDb = User::firstOrCreate(['vatsim_id' => $vatsimID], [
                    'vatsim_id'    => $vatsimID,
                    'first_name'   => $firstName,
                    'last_name'    => $lastName,
                    'atc_rating'   => $atcRating,
                    'pilot_rating' => $pilotRating,
                    'email'        => $email,
                    'isATC'        => $isATC
                ]);
                Auth::login($userDb, true);
            } else {
                $status = false;

            }
        });

        return redirect('/')->with('login', $status);
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->back()->with('logout', true);
    }
}
