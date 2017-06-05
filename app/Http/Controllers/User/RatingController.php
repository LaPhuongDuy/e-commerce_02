<?php

namespace App\Http\Controllers\User;

use App\Http\Requests\RatingRequest;
use App\Models\Product;
use App\Models\Rating;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RatingController extends Controller
{

    /**
     * Hàm này để rate một sản phẩm:
     * - Nếu chưa đăng nhập không cho rate
     * - Nếu đăng nhập rồi và rate lần đầu thì lưu, nếu có rồi thì update
     * @param Request $request
     * @return string
     */
    public function store(RatingRequest $request)
    {
        if (Auth::check()){
            $rating = Rating::where('product_id', $request->product_id)->where('customer_id', $request->customer_id);

            if (($rating->get()->count()) == 0)
            {
                Rating::create(['product_id' => $request->product_id,
                    'customer_id' => $request->customer_id,
                    'score' => $request->score,
                ]);

                $score = DB::table('ratings')->where('product_id', $request->product_id)->avg('score');

                Product::where('id', $request->product_id)->update(['score' => $score]);

                return 'Update score success!';
            } else {
                $rating->update(['score' => $request->score]);
                $score = DB::table('ratings')->where('product_id', $request->product_id)->avg('score');
                Product::where('id', $request->product_id)->update(['score' => $score]);

                return 'Ratting success!';
            }
        }

        return 'You must login to rating!';
    }
}
