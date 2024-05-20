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
        Schema::create('sec_apps', function (Blueprint $table) {
            $table->string('app_name', 128);
            $table->string('app_type')->nullable();
            $table->string('description')->nullable();
            $table->timestamps();

            $table->primary('app_name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sec_apps');
    }
};
