<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Attach extends Model {

    use \Illuminate\Database\Eloquent\SoftDeletes;

    protected $fillable = ["name", "desc", "filename", "original_filename", "mime", "entity", "entity_id", "user_id"];

    protected $dates = [];

    public static $rules = [
        "name" => "required",
        "filename" => "required",
        "original_filename" => "required",
        "mime" => "required",
        "entity" => "required",
        "entity_id" => "numeric",
        "user_id" => "required|numeric",
    ];

    public function user()
    {
        return $this->belongsTo("App\User");
    }


}
