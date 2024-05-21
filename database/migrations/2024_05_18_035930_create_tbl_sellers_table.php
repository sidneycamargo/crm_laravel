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
        Schema::create('tbl_sellers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('login')->nullable();
            $table->string('email')->nullable();

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
        Schema::dropIfExists('tbl_sellers');
    }
};
