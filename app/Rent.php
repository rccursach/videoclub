<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Rent extends Model {

	protected $fillable = ["date_start", "date_end", "movie_id", "client_id", "returned"];

	protected $dates = [];

	public static $rules = [
		"date_start" => "date,required",
		"date_end" => "date,required",
		"movie_id" => "required,numeric",
		"client_id" => "required,numeric",
		"returned" => "required",
	];

	// Relationships

}
