<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{AuthController,subscriptionController};

Route::group(['middleware' => ['guest']],function(){

    Route::get('/',[AuthController::class,'index']);
    Route::get('/user-login',[AuthController::class,'login']);
    Route::post('user-register',[AuthController::class,'register'])->name('userRegister');
    Route::post('user-login',[AuthController::class,'UserLogin'])->name('userLogin');
});

Route::group(['middleware' => ['isAuth']],function(){
    Route::get('/dashboard',[AuthController::class,'dashboard']);
});

Route::group(['middleware' => ['isAuthnticate']],function(){
    Route::get('subscription',[subscriptionController::class,'index']);
});


