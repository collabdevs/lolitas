<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model {

    protected $fillable = ["name", "desc", "deal_at", "total", "user_id", "store_id"];

    protected $dates = ["deal_at"];

    public static $rules = [
        "name" => "required",
        "deal_at" => "date",
        "total" => "numeric",
        "user_id" => "required|numeric",
        "store_id" => "required|numeric",
    ];

    public function cartProducts()
    {
        return $this->hasMany("App\CartProduct");
    }

    public function user()
    {
        return $this->belongsTo("App\User");
    }

    public function store()
    {
        return $this->belongsTo("App\Store");
    }


}
