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
        Schema::create('tbl_marital_status', function (Blueprint $table) {
            $table->id();
            $table->string('masculine_name');
            $table->string('female_name');

            $table->timestamps();

            // Foreign Keys / Chaves estrangeiras
            $table->foreignid('tbl_company_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_marital_status');
    }
};
