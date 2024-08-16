<?php

use App\Http\Controllers\UserController;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/users', function () {
    return User::all();
});

Route::get('/orders', function () {
    return Order::all();
});

Route::get('/products', function () {
    return Product::all();
});

Route::get('/users/{user}/last30DaysOrders', [UserController::class, 'get30DaysBuy']);
