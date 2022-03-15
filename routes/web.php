<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcom2');
});

Route::get('/news-and-events', function () {
    return view('News_and_events');
})->name('news-and-events');

Route::get('/gallary', function () {
    return view('Gallary');
})->name('gallary');

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     $navigations = 'dashboard';
//     return view('dashboard',['navigations' => $navigations]);
// })->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])
    ->group(function () {
        
        Route::get('/dashboard', [App\Http\Controllers\NavigationController::class, 'dashboard'])->name('dashboard');
        Route::get('/registerInfo', [App\Http\Controllers\NavigationController::class, 'register'])->name('registerInfo');
        Route::get('/inbox', [App\Http\Controllers\NavigationController::class, 'inbox'])->name('inbox');
        Route::get('/messages', [App\Http\Controllers\NavigationController::class, 'messages'])->name('messages');
        Route::get('/notifications', [App\Http\Controllers\NavigationController::class, 'notifications'])->name('notifications');
        Route::get('/tasks', [App\Http\Controllers\NavigationController::class, 'tasks'])->name('tasks');



        Route::post('/registerInfoInfo', [App\Http\Controllers\NavigationController::class, 'registerInfoInfo'])->name('registerInfoInfo');

    });