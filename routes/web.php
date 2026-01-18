<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'referralLink' => config('app.referral_link'),
    ]);
})->name('home');
