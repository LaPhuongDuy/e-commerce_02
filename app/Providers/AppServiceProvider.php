<?php

namespace App\Providers;

use App\Models\Brand;
use App\Models\Product;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Models\Category;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Schema::defaultStringLength(191);

        $cate_parent = Category::whereNull('parent_id')->get();
        View::share('cate_parent', $cate_parent);

        $high_product = Product::where('score', '>', 8)->get()->take(10);
        View::share('high_product', $high_product);

        $brands = Brand::all();
        View::share('brands', $brands);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
