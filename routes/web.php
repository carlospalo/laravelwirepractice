<?php

Route::livewire('/', 'home')->name('home')->middleware('auth');
Route::livewire('/tickets', 'tickets.dashboard')->name('tickets')->middleware('auth');
Route::get('/tickets/new', function () {
    return view('routes.tickets.create');
});
Route::livewire('/tickets/{SupportTicket}', 'tickets.edit')->name('tickets.edit')->middleware('auth');
Route::group(['middleware'=>'guest'], function () {
    Route::livewire('/login', 'login')->name('login');
    Route::livewire('/register', 'register');
});
