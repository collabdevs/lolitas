<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model {

    use \Illuminate\Database\Eloquent\SoftDeletes;

    protected $fillable = ["name", "desc", "published_at", "user_id"];

    protected $dates = ["published_at"];

    public static $rules = [
        "name" => "required",
        "published_at" => "date",
        "user_id" => "required|numeric",
    ];

    public function user()
    {
        return $this->belongsTo("App\User");
    }


}
