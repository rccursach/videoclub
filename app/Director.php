<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Director extends Model {

	protected $fillable = ["name", "surname"];

	protected $dates = [];

	public static $rules = [
		"name" => "required",
	];

	// Relationships
	public function movies()
	{
		return $this->hasMany('App\Movie');
	}

}
