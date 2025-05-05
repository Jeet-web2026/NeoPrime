<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('landing_contents', function (Blueprint $table) {
            $table->id();
            $table->timestamp('created_at')->useUpdate();
            $table->timestamp('updated_at')->useUpdate()->useCurrent();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('landing_contents');
    }
};
