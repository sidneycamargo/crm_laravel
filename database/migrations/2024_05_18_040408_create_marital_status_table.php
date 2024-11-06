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
        Schema::create('marital_status', function (Blueprint $table) {
            $table->id();
            $table->string('masculine_name')->unique();
            $table->string('female_name')->unique();

            $table->timestamps();

            // Foreign Keys / Chaves estrangeiras
            $table->foreignid('company_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('marital_status');
    }
};
