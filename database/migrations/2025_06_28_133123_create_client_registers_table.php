<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('client_registers', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('name');
            $table->text('address');
            $table->text('address_second');
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->string('pincode');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('client_registers');
    }
};
