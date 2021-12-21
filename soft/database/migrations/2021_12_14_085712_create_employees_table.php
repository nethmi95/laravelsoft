<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee', function (Blueprint $table) {
            $table->increments('id');
            $table->string('EmployeeName');
            $table->string('EmployeeAddress');
            $table->string('Designation');
            $table->date('DateOfJoined');
            $table->string('BasicSalary');
            $table->string('ContactNumber');
            $table->string('DepartmentID');
            $table->string('ContractPeriodExpireDate');
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
        Schema::dropIfExists('employee');
    }
}
