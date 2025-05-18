<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('aboutus', function (Blueprint $table) {
            $table->id();
            $table->text('about_heading')->nullable();
            $table->text('about_first_img')->nullable();
            $table->text('about_second_img')->nullable();
            $table->text('about_description')->nullable();
            $table->text('about_first_point')->nullable();
            $table->text('about_second_point')->nullable();
            $table->text('about_third_point')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('aboutus');
    }
};
