<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('what_we_offers', function (Blueprint $table) {
            $table->id();
            $table->text('service_name')->nullable();
            $table->text('service_img_url')->nullable();
            $table->text('service_description')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('what_we_offers');
    }
};
