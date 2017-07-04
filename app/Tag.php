<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model {

    protected $fillable = ["name", "desc", "product_id"];

    protected $dates = [];

    public static $rules = [
        "name" => "required|min:3",
        "product_id" => "required|numeric",
    ];

    public $timestamps = false;

    public function product()
    {
        return $this->belongsTo("App\Product");
    }


}
