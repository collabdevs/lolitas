<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model {

    protected $fillable = ["name", "desc", "added_at", "price", "discount", "valid_until"];

    protected $dates = ["added_at", "valid_until"];

    public static $rules = [
        "name" => "required",
        "added_at" => "date",
        "price" => "numeric",
        "discount" => "numeric",
        "valid_until" => "date",
    ];

    // Relationships

}
