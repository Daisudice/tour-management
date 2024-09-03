<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TravelAgentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('public\welcome');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


Route::prefix('/admin')->group(function(){
    Route::get('/dashboard',[DashboardController::class,'dashboardController'])->name('admin-dashboard');
    Route::get('/travel-agent',[TravelAgentController::class,'travelAgentController'])->name('admin-travel-agent');
    Route::post('/travel-agent-register',[UserController::class,'registerTravelAgentAcc'])->name('register-travel-agent');
    Route::get('/travelagent-show-to-update-form/{id}',[UserController::class,'showUpdateformTravelAgent'])->name('travel-agent-show-to-update-form');

});

});


require __DIR__.'/auth.php';
