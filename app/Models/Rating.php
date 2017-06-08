<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $fillable = [
        'product_id',
        'customer_id',
        'score',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public static function getRateByCustomer($idProduct, $idCustomer)
    {
        return self::where(['product_id' => $idProduct, 'customer_id' => $idCustomer]);
    }

    public static function avgScore($idProduct)
    {
        return self::where('product_id', $idProduct)->avg('score');
    }

    public static function scoreByCustomer($idCustomer, $idProduct)
    {
        return self::getRateByCustomer($idProduct, $idCustomer);
    }
}
