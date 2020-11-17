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

Route :: get ('subpage/{id}', function ($id) {
    echo 'Subpage ID: '.$id;
    // echo '<br/><button onClick="location.href=/">back</button>';
    echo'<form action="/">';
    echo'    <input type="submit" value="Back" />';
    echo'</form>';
});
