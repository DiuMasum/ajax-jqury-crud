<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

Route::controller(EmployeeController::class)->group(function(){
    Route::get('/', 'Index');
    Route::post('/store', 'Store')->name('store');
    Route::get('/fetch-all', 'FetchAll')->name('fetchall');
    Route::get('/edit', 'Edit')->name('edit');
    Route::post('/update', 'Update')->name('update');
    Route::post('/delete', 'Delete')->name('delete');
});
