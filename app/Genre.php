<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model {

	protected $fillable = ["description"];

	protected $dates = [];

	public static $rules = [
		"name" => "unique",
		"description" => "nullable",
	];

	// Relationships

}
