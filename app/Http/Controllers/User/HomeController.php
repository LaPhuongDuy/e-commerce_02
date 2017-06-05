<?php

namespace App\Http\Controllers\User;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $best_seller = Product::all()->take(10);
        $latest_product = Product::orderBy('created_at', 'ASC')->get()->take(5);
        $old_product = Product::where('age', '>', 7)->get()->take(10);
        $high_product = Product::where('score', '>', 8)->get()->take(10);

        return view('user.index', compact('best_seller', 'latest_product', 'old_product', 'high_product'));
    }
}
