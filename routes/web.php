<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.main');
});

Route::get('/login', function () {
    $send = "";
    $returnUrl = "http://realops.test/validate";
    VatsimSSO::login(
        $returnUrl, function ($key, $secret, $url) {
        Session::put('vatsimAuth', compact('key', 'secret'));
        header('Location: '. $url);
    }, function ($e) {
        throw $e;
    });
});
Route::get('/validate', function () {
    $session = Session::get('vatsimAuth');

    VatsimSSO::validate(
        $session['key'], $session['secret'],
        Request::input('oauth_verifier'), function ($user, $request) {
        Session::forget('vatsimAuth');

        dd($user);

    });
});