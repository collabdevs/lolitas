<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model {

    protected $fillable = ["name", "desc", "url"];

    protected $dates = [];

    public static $rules = [
        "name" => "required|min:3",
    ];

    public $timestamps = false;

    public function contents()
    {
        return $this->hasMany("App\Content");
    }


}
