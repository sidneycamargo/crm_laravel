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
        Schema::create('tbl_organizations', function (Blueprint $table) {
            $table->id();
            $table->string('description', 150);
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('country', 3)->nullable();

            $table->timestamps();

            $table->foreignId('tbl_company_id')->constrained();
            // $table->foreignId('tbl_organization_fields_id')->constrained();
            $table->foreignId('tbl_seller_id')->constrained();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_organizations');
    }
};
