<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.index');
});

Route::get('/aboutus', function () {
    return view('pages.about');
});

Route::get('/services', function () {
    return view('pages.services');
});

Route::get('/service-detail', function () {
    return view('pages.service-detail');
});

Route::get('/pricing', function () {
    return view('pages.pricing');
});

Route::get('/gallery', function () {
    return view('pages.gallery');
});

Route::get('/team', function () {
    return view('pages.team');
});

Route::get('/contactus', function () {
    return view('pages.contact');
});

Route::get('/login', function () {
    return view('pages.login');
});


Route::get('/login', function () {
    return view('pages.login');
});

Route::get('/appointment', function () {
    return view('pages.appointment');
});

Route::get('/error', function () {
    abort(404);
});