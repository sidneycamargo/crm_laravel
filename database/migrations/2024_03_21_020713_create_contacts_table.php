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
            $table->string('name');
            $table->integer('organization_id')->default(1);
            $table->date('date')->nullable();
            $table->string('title')->nullable();
            $table->enum('sex', ['Masculin', 'Feminin'])->default('Masculin');
            $table->enum('document_type', ['ID', 'Passport', 'RNE'])->default('ID');
            $table->string('document')->nullable();
            $table->string('itin')->nullable();
            $table->string('nationality')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('profession')->nullable();
            $table->enum('lead_surce', [])->default('');
            $table->string('zip', 9)->nullable();
            $table->string('street_name')->nullable();
            $table->string('number')->nullable();
            $table->string('complement')->nullable();
            $table->string('district')->nullable();
            $table->string('city')->nullable();
            $table->float('discount_fidelity')->nullable();
            $table->enum('discount_fidelity_type', ['%', '$'])->default('%');
            
            $table->timestamps();
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
