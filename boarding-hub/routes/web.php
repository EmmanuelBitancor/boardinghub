<?php

use Illuminate\Support\Facades\Route;

// When user goes to the homepage ('/'), return the 'home' view
Route::get('/', function () {
    return view('home');  // <--- Make sure this says 'home', not 'welcome'
});

Route::get('/boarding-house-lists', function () {
    return view('boarding_house_lists');
});

Route::get('/landlords-owners', function () {
    return view('landlords_owners');
});