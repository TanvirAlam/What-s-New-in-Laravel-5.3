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
use App\Notifications\LessionPublished;
use App\User;

Route::get('/', function () {
    $users = App\User::first();
    $lession = App\Lession::first();

    $users->notify(new LessionPublished($lession));

});
