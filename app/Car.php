<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model {

    use \Illuminate\Database\Eloquent\SoftDeletes;

    protected $fillable = ["name", "desc", "published_at", "price", "teaser", "product_sub_categorie_id", "store_id"];

    protected $dates = ["published_at"];

    public static $rules = [
        "name" => "required",
        "published_at" => "date",
        "price" => "numeric",
        "teaser" => "required",
        "product_sub_categorie_id" => "required|numeric",
        "store_id" => "required|numeric",
    ];

    public function tags()
    {
        return $this->hasMany("App\Tag");
    }

    public function productSubCategorie()
    {
        return $this->belongsTo("App\ProductSubCategorie");
    }

    public function store()
    {
        return $this->belongsTo("App\Store");
    }


}
