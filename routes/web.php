<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware('admin')->group(function(){
        Route::get('/' , function(){
            $title = 'Dashboard';
            $subtitle ='Dashboard';
            return view('backend.index' ,compact('title' , 'subtitle'));})->name('admin');
//Admin page route
    Route::resource('/add' , \App\Http\Controllers\Backend\AdminController::class);

//    Client page route
    Route::resource('/client' , \App\Http\Controllers\Backend\ClientController::class);

});




//Error 404 page
Route::get('/error404' , function(){return view('error.error404');})->name('error404');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
