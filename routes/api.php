<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/popular-products', [ProductController::class, 'getPopularProducts']);
