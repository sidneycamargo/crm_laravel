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
            $table->bigIncrements('id');
            $table->integer('organizations_id');
            $table->string('name');
            $table->string('title')->nullable();
            $table->string('email')->nullable();
            $table->string('phone', 20)->nullable();
            $table->integer('lead_source_id');
            $table->string('zip', 9)->nullable();
            $table->string('address_name')->nullable();
            $table->string('address_number', 10)->nullable();
            $table->string('address_complement')->nullable();
            $table->string('address_district')->nullable();
            $table->string('address_city')->nullable();
            $table->string('address_state')->nullable();
            $table->string('ddd')->nullable();
            $table->string('nationality')->nullable();
            $table->string('occupation')->nullable();
            $table->string('marital_status_id')->nullable();
            $table->string('sex', 1)->nullable();
            $table->string('document_type', 20)->nullable();
            $table->string('document')->nullable();
            $table->string('itin')->nullable();
            $table->integer('company_id')->nullable()->default(1);
            $table->string('mkt_position')->default('lead');
            $table->date('birth_date');

            $table->primary('id');
            // $table->foreign('')
            
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
