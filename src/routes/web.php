<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Playbackchat\Balajeeva\Http\Controllers\MessageController;

// Route::get('/chat', function () {
//     return view('ChatApp::ChatApp');
// });


Route::get('contact', [MessageController::class, 'index'])->name('contact');
Route::post('contact', [MessageController::class, 'send']);

// Route::post('contact', function (Request $request) {
//     return $request->all();
// });
