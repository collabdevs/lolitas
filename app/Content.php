<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model {

    use \Illuminate\Database\Eloquent\SoftDeletes;

    protected $fillable = ["name", "desc", "published_at", "url", "categorie_id", "user_id"];

    protected $dates = ["published_at"];

    public static $rules = [
        "name" => "required",
        "published_at" => "date",
        "categorie_id" => "required|numeric",
        "user_id" => "required|numeric",
    ];

    public function categorie()
    {
        return $this->belongsTo("App\Categorie");
    }

    public function user()
    {
        return $this->belongsTo("App\User");
    }


}
