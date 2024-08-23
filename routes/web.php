<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Main Page';
});

// redirecting from an old route to a new route
Route::get('/hallo', function () {
    return redirect()->route('Hello');
});

// route with name
Route::get('/hello', function () {
    return "Hello!";
})->name("Hello");

// route with parameter
Route::get('/greet/{name}', function ($name) {
    return "Hello " . $name . "!";
});

// generic path to a non-existent route
Route::fallback(function () {
    return "Rota inexistente!";
});
