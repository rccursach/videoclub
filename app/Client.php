<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model {

	protected $fillable = ["name", "surname", "birth_date", "phone", "address"];

	protected $dates = [];

	public static $rules = [
		"name" => "required",
		"surname" => "required",
		"run" => "unique:clients,run",
		"birth_date" => "required",
		"phone" => "required",
		"address" => "required",
	];

	// Relationships
	public function rents()
	{
		return $this->hasMany('App\Rent');
	}

}
