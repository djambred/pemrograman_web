<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('indicators', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('domain_id');
            $table->foreignId('aspect_id');
            $table->longText('name');
            $table->longText('detail')->nullable();
            $table->longText('description')->nullable();
            $table->longText('score_criteria')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('indicators');
    }
};
