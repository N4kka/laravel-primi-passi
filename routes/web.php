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

Route::get('/', function () {
    //Insert some data to pass to Home Page
    $data = [
        'name' => 'Nicola',
        'isLoggedIn' => true
    ];
    return view('HomePage', $data);
})->name('home');

Route::get('/about-us', function () {
    $data = [
        'contact' => [
            [
                'name' => 'About us'
            ],
            [
                'name' => 'Phone'
            ],
            [
                'name' => 'Website'
            ],
            [
                'name' => 'Address'
            ],
            [
                'name' => 'Email'
            ],
        ]
    ];
    return view('about-us', $data);
})->name('about');

Route::get('/services', function () {
    $data = [
        'services' => [
            'first' => [
                'name' => 'business',
                'duration' => '12 months'
            ],
            'second' => [
                'name' => 'tech',
                'duration' => '6 months'
            ],
            'third' => [
                'name' => 'finance',
                'duration' => '3 months'
            ],
            'fourth' => [
                'name' => 'videos',
                'duration' => '1 months'
            ]
        ]
    ];
    return view('services', $data);
})->name('services');
