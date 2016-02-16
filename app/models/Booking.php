<?php

class Booking extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];


	public function client(){

		return $this->belongsTo('Client');
	}


	public function car(){

		return $this->belongsTo('Car');
	}

}