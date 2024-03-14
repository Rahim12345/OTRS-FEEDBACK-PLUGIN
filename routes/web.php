<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/feedback/{ticket_token}', [TicketController::class, 'feedback'])
//    ->middleware('throttle:5,1')
    ->name('show.feedback');
Route::post('/feedback', [TicketController::class, 'store'])
//    ->middleware('throttle:5,1')
    ->name('feedback.store');

Route::get('/feedback-admin/{ticket_token}', [TicketController::class, 'feedbackAdmin'])
//    ->middleware('throttle:5,1')
    ->name('show.feedback.admin');

Auth::routes([
    'register' => false,
    'reset' => false,
]);

Route::get('/', [LoginController::class,'showLoginForm'])->name('login');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/ticket-history/{ticket_id}', [HomeController::class, 'ticketHistory'])
    ->name('ticket.history');
