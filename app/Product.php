<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

    use \Illuminate\Database\Eloquent\SoftDeletes;

    protected $fillable = ["name", "desc", "published_at", "price", "promo", "teaser", "quantity", "min_quantity", "url", "store_id", "product_sub_categorie_id", "manufacturer_id"];

    protected $dates = ["published_at"];

    public static $rules = [
        "name" => "required",
        "published_at" => "date",
        "price" => "numeric",
        "promo" => "numeric",
        "quantity" => "numeric",
        "min_quantity" => "numeric",
        "store_id" => "required|numeric",
        "product_sub_categorie_id" => "required|numeric",
        "manufacturer_id" => "required|numeric",
    ];

    public function tags()
    {
        return $this->hasMany("App\Tag");
    }

    public function store()
    {
        return $this->belongsTo("App\Store");
    }

    public function cart()
    {
        return $this->belongsTo("App\Cart");
    }

    public function productSubCategorie()
    {
        return $this->belongsTo("App\ProductSubCategorie");
    }

    public function Manufacturer()
    {
        return $this->belongsTo("App\Manufacturer");
    }


}
