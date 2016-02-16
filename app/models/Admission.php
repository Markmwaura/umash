<?php

class Admission extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];



	public static function getAdmissionNumber(){

		$last_code = DB::table('admissions')->orderBy('admission_no', 'DESC')->pluck('admission_no');

		if($last_code){
			return $last_code + 1;
		} else {
			return 1000 +1;
		}

		
	}

}