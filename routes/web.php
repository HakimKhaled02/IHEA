<?php

use Illuminate\Support\Facades\Route;

// Homepage
Route::get('/', function () {
    return view('home');
})->name('home');

// Information Pages
Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/mission', function () {
    return view('pages.mission');
})->name('mission');

Route::get('/why-matters', function () {
    return view('pages.why-matters');
})->name('why-matters');

Route::get('/categories', function () {
    return view('pages.categories');
})->name('categories');

Route::get('/eligibility', function () {
    return view('pages.eligibility');
})->name('eligibility');

Route::get('/how-to-enter', function () {
    return view('pages.how-to-enter');
})->name('how-to-enter');

Route::get('/submission-rules', function () {
    return view('pages.submission-rules');
})->name('submission-rules');

Route::get('/judging-framework', function () {
    return view('pages.judging-framework');
})->name('judging-framework');

Route::get('/judging-criteria', function () {
    return view('pages.judging-criteria');
})->name('judging-criteria');

Route::get('/confidentiality', function () {
    return view('pages.confidentiality');
})->name('confidentiality');

Route::get('/winner-recognition', function () {
    return view('pages.winner-recognition');
})->name('winner-recognition');

Route::get('/faq', function () {
    return view('pages.faq');
})->name('faq');

Route::get('/fees-packages', function () {
    return view('pages.fees-packages');
})->name('fees-packages');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::view('winner-faqs-awards', 'winnerFAQsAwards.winnerFAQsAward')
    ->name('winnerFAQsAwards.index');

