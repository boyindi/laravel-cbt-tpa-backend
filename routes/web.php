<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.auth.login');
});
// Route::get('/login', function () {
//     return view('pages.auth.login');
// })->name('login');


// Route::get('/register', function () {
//     return view('pages.auth.register');
// })->name('register');


// Route::get('/user', function () {
//     return view('pages.users.index');
// });
