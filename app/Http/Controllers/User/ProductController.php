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
        $pictures = Picture::where('product_id' ,$id)->get();
        $same_brand = Product::where('brand_id', $product->brand_id)->take(6)->get();
        $same_category = Product::where('category_id', $product->category_id)->take(6)->get();
        return view('user.detail_product', compact('product', 'pictures', 'same_brand', 'same_category'));
    }
}
