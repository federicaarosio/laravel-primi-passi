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
    $title = 'Welcome here';
    return view('home', ['title'=> $title,
                        'description' => 'this is a wonderful place'
                        ]);
});

Route::get('/contacts', function () {
    $phone = '339 111 222 333';
    $address = 'abcde street';
    return view('contacts', ['phone'=> $phone,
                            'address' => $address
                            ]);
});
