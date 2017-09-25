<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class CartProduct extends Model {

    protected $fillable = ["name", "desc", "added_at", "price", "discount", "quantity", "product_id", "user_id", "cart_id"];

    protected $dates = ["added_at"];

    public static $rules = [
        "name" => "required",
        "added_at" => "date",
        "price" => "numeric",
        "discount" => "numeric",
        "quantity" => "required,numeric",
        "product_id" => "required,numeric",
        "user_id" => "required|numeric",
        "cart_id" => "required|numeric",
    ];

    public function user()
    {
        return $this->belongsTo("App\User");
    }

    public function cart()
    {
        return $this->belongsTo("App\Cart");
    }


}
