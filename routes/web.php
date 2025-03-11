<?php
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Route;

Route::get('/test', function () {
    return response()->json([
        'route_url' => route('test'),
        'url_url'   => url('/test'),
        'secure_url'=> URL::secure('/test'),
        'request_scheme' => request()->getScheme(),
    ]);
})->name('test');
