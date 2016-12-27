<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

use App\Mail\WelcomeToLaravel53;
use App\User;

Route::get('/', function () {
    //return view('users', ['users' => App\User::paginate(4)]);

    $email = new WelcomeToLaravel53(new User(['name' => 'jane']));
    Mail::to('tanvir@tanvir.dk')->send($email);

});
