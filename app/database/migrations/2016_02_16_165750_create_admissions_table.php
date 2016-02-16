<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdmissionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('admissions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->date('date');
			$table->string('name');
			$table->string('id_number')->nullable();
			$table->string('certificate_no')->nullable();
			$table->string('cause_of_death')->nullable();
			$table->string('place_of_death')->nullable();
			$table->string('admission_no')->nullable();
			$table->string('category')->nullable();
			$table->date('date_released')->nullable();
			$table->string('kin_name')->nullable();
			$table->string('kin_phone')->nullable();
			$table->string('kin_id_number')->nullable();
			$table->string('status')->default('admitted');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('admissions');
	}

}
