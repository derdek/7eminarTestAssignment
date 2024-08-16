<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\Cache;

class ProductController extends Controller
{
    public function getPopularProducts()
    {
        $cached = Cache::get('popular_products_3');
        if ($cached) {
            return $cached;
        }

        $products = Product::query()
            ->where('rating', '>', 7)
            ->where('created_at', '>=', now()->subDays(30))
            ->take(10)
            ->get();
        Cache::set('popular_products_3', $products, now()->addHour());
        return $products;
    }
}
