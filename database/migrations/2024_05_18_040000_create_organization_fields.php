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
        Schema::create('organization_fields', function (Blueprint $table) {
            $table->id();
            $table->string('description', 150);

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
        Schema::dropIfExists('organization_fields');
    }
};
