<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('our_services', function (Blueprint $table) {
            $table->id();
            $table->text('icon')->nullable();
            $table->text('name')->nullable();
            $table->text('image')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('our_services');
    }
};
