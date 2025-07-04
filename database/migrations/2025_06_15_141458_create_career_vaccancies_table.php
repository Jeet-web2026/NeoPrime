<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('career_vaccancies', function (Blueprint $table) {
            $table->id();
            $table->text('designation');
            $table->string('salary_range', 255);
            $table->string('start_date', 255);
            $table->text('requirements');
            $table->text('description');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('career_vaccancies');
    }
};
