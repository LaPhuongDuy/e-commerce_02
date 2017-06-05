<?php

namespace App\Http\Controllers\User;

use App\Models\Picture;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function show($id)
    {
        $product = Product::find($id);
        $pictures = $product->pictures()->get();
        $sameBrand = Product::where('brand_id', $product->brand_id)->take(6)->get();
        $sameCategory = Product::where('category_id', $product->category_id)->take(6)->get();

        return view('user.detail_product', compact('product', 'pictures', 'sameBrand', 'sameCategory'));
    }
}
