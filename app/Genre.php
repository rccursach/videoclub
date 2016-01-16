<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model {

	protected $fillable = ["name", "description"];

	protected $dates = [];

	public static $rules = [
		"name" => "unique",
		"description" => "nullable",
	];

	// Relationships
	public function movies()
	{
		return $this->hasMany('App\Movie');
	}

}
