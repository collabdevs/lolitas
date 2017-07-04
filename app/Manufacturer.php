<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model {

    protected $fillable = ["name", "desc", "cnpj", "url"];

    protected $dates = [];

    public static $rules = [
        "name" => "required",
        "cnpj" => "required",
    ];

    public function products()
    {
        return $this->hasMany("App\Product");
    }

    public function addresses()
    {
        return $this->hasMany("App\Address");
    }


}
