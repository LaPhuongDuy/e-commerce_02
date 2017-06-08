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
        $bestSeller = Product::bestSeller()->get();

        $latestProduct = Product::latestProduct()->get();

        $oldProduct = Product::oldProduct()->get();

        return view('user.index', compact('bestSeller', 'latestProduct', 'oldProduct'));
    }
}
