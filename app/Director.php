<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Director extends Model {

	protected $fillable = ["name"];

	protected $dates = [];

	public static $rules = [
		"name" => "required",
	];

	// Relationships

}
