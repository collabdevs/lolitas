<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductSubCategorie extends Model {

    protected $fillable = ["name", "desc", "product_categorie_id"];

    protected $dates = [];

    public static $rules = [
        "name" => "required,min:3",
        "product_categorie_id" => "required|numeric",
    ];

    public $timestamps = false;

    public function products()
    {
        return $this->hasMany("App\Product");
    }

    public function productCategorie()
    {
        return $this->belongsTo("App\ProductCategorie");
    }


}
