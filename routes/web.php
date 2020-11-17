<?php

use Illuminate\Support\Facades\Route;

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

Route :: get ('/', function () {
   return view('main');
});

Route :: get ('subpage/{id?}', function ($id = null) {
    if ($id == null) {
        echo 'Hello, Anonymous Guest!';
    } else {
        echo 'Subpage ID: '.$id;
    }

    echo'<form action="/">';
    echo'    <input type="submit" value="Back" />';
    echo'</form>';
});
