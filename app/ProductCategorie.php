<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategorie extends Model {

    protected $fillable = ["name", "desc"];

    protected $dates = [];

    public static $rules = [
        "name" => "required,min:3",
    ];

    public $timestamps = false;

    public function productSubCategories()
    {
        return $this->hasMany("App\ProductSubCategory");
    }


}
