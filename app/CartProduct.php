<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class CartProduct extends Model {

    protected $fillable = ["name", "desc", "added_at", "price", "discount", "quantity", "cart_id"];

    protected $dates = ["added_at"];

    public static $rules = [
        "name" => "required",
        "added_at" => "date",
        "price" => "numeric",
        "discount" => "numeric",
        "quantity" => "required,numeric",
        "cart_id" => "required|numeric",
    ];

    public function cart()
    {
        return $this->belongsTo("App\Cart");
    }


}
