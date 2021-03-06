<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeDeductionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('employee_deductions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('employee_id')->unsigned()->default('0')->index('employee_deductions_employee_id_foreign');
			$table->integer('deduction_id')->unsigned()->default('0')->index('employee_deductions_deduction_id_foreign');
            $table->string('formular');
            $table->integer('instalments')->default('0')->nullable();
			$table->string('deduction_amount')->default('0.00');
			$table->date('deduction_date');
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
		Schema::drop('employee_deductions');
	}

}
