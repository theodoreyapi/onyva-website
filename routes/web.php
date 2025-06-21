<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('index', function () {
    return view('site');
});

Route::get('about', function () {
    return view('about');
});

Route::get('features', function () {
    return view('features');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('careers', function () {
    return view('careers');
});

Route::get('all-jobs', function () {
    return view('all-jobs');
});

Route::get('culture', function () {
    return view('culture');
});

Route::get('job-detail', function () {
    return view('job-detail');
});

Route::get('spontaneous', function () {
    return view('spontaneous-application');
});

Route::get('privacy-policy', function () {
    return view('privacy-policy');
});

Route::get('cookies-settings', function () {
    return view('cookies-settings');
});

Route::get('terms-of-service', function () {
    return view('terms-of-service');
});
