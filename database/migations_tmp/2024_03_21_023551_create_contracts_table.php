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
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->string('year');
            $table->integer('number');
            $table->date('date')->nullable();
            $table->integer('company_id');
            $table->integer('contact_id');
            $table->string('name');
            $table->enum('sex', ['Masculin', 'Feminin'])->default('Masculin');
            $table->enum('document_type', ['ID', 'Passport', 'RNE'])->default('ID');
            $table->string('document')->nullable();
            $table->string('itin')->nullable();
            $table->string('nationality')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('profession')->nullable();
            $table->date('start_date');
            $table->date('end_date');
            $table->decimal('total_price', 10,2);
            $table->integer('qtty_days');
            $table->string('discount_description_1')->nullable();
            $table->float('discount_value_1')->nullable();
            $table->enum('discount_type_1', ['%', '$'])->default('%');
            $table->string('discount_description_2')->nullable();
            $table->float('discount_value_2')->nullable();
            $table->enum('discount_type_2', ['%', '$'])->default('%');
            $table->string('discount_description_3')->nullable();
            $table->float('discount_value_3')->nullable();
            $table->enum('discount_type_3', ['%', '$'])->default('%');
            $table->float('discount_money')->nullable();
            $table->enum('discount_money_type', ['%', '$'])->default('%');
            $table->string('signature_name');
            $table->string('zip', 9);
            $table->string('street_name');
            $table->string('number');
            $table->string('complement');
            $table->string('district');
            $table->string('city');
            $table->datetime('installed_date')->nullable();
            $table->datetime('returned_date')->nullable();
            $table->decimal('amount_paid', 10, 2);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contracts');
    }
};
