<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function get30DaysBuy(User $user, Request $request)
    {
        $page = $request->query('page', 1);
        $perPage = $request->query('per_page', 20);

        return Product::query()
            ->join('orders', 'products.order_id', '=', 'orders.id')
            ->where('orders.user_id', $user->id)
            ->whereDate('orders.created_at', '>=', now()->subDays(30))
            ->forPage($page, $perPage)
            ->get();
    }
}
