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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('name', 150);
            $table->date('date')->nullable();
            $table->string('title', 20)->nullable();
            $table->enum('sex', ['Masculin', 'Feminin'])->default('Masculin');
            $table->enum('document_type', ['RG/ID', 'Passport', 'RNE'])->default('RG/ID');
            $table->string('document', 45)->nullable();
            $table->string('itin', 45)->nullable();
            $table->string('email', 150)->nullable();
            $table->string('phone', 20)->nullable();
            $table->string('zip', 9)->nullable();
            $table->string('street_name', 100)->nullable();
            $table->string('number', 10)->nullable();
            $table->string('complement', 50)->nullable();
            $table->string('district', 50)->nullable();
            $table->string('city', 100)->nullable();
            $table->string('state', 45)->nullable();
            $table->string('ddd', 3)->nullable();
            $table->string('nationality', 45)->nullable();
            $table->string('occupation', 100)->nullable();
            $table->string('mkt_position', 20)->nullable();

            $table->date('birth_date')->nullable();
            $table->float('discount_fidelity')->nullable();
            $table->enum('discount_fidelity_type', ['%', '$'])->default('%');

            $table->timestamps();

            // Foreign Keys / Chaves estrangeiras
            $table->foreignid('company_id')->constrained();
            $table->foreignid('organization_id')->constrained();
            $table->foreignid('marital_status_id')->references('id')->on('marital_status')->constrained();
            $table->foreignid('lead_source_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
