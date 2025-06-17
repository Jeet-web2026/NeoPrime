<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('add_employees', function (Blueprint $table) {
            $table->id();
            $table->string('position');
            $table->string('start_date');
            $table->string('designation');
            $table->string('name');
            $table->string('contact_no');
            $table->string('email');
            $table->integer('age');
            $table->string('country');
            $table->string('city');
            $table->string('prevoius_joining_date');
            $table->string('prevoius_employeer');
            $table->string('last_withdran_salary');
            $table->string('prevoius_designation');
            $table->string('prevoius_location');
            $table->string('total_years_of_working');
            $table->string('employee_profile');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('add_employees');
    }
};
