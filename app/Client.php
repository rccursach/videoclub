<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model {

	protected $fillable = ["name", "surname", "birth_date", "phone", "address"];

	protected $dates = [];

	public static $rules = [
		"name" => "required",
		"surname" => "required",
		"run" => "unique",
		"birth_date" => "required",
		"phone" => "required",
		"address" => "required",
	];

	// Relationships

}
