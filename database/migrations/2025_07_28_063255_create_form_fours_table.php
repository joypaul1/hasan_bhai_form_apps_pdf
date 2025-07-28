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
        Schema::create('form_fours', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('customer_id');
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');

            // Restaurant Details
            $table->string('restaurant_name')->nullable();
            $table->string('legal_restaurant_name')->nullable();
            $table->string('trade_register_number')->nullable();

            // UBO 1
            $table->string('ubo1_first_name')->nullable();
            $table->string('ubo1_last_name')->nullable();
            $table->date('ubo1_dob')->nullable();
            $table->string('ubo1_birthplace')->nullable();
            $table->decimal('ubo1_share_percentage', 5, 2)->nullable();
            $table->text('ubo1_address')->nullable();

            // UBO 2
            $table->string('ubo2_first_name')->nullable();
            $table->string('ubo2_last_name')->nullable();
            $table->date('ubo2_dob')->nullable();
            $table->string('ubo2_birthplace')->nullable();
            $table->decimal('ubo2_share_percentage', 5, 2)->nullable();
            $table->text('ubo2_address')->nullable();

            // UBO 3
            $table->string('ubo3_first_name')->nullable();
            $table->string('ubo3_last_name')->nullable();
            $table->date('ubo3_dob')->nullable();
            $table->string('ubo3_birthplace')->nullable();
            $table->decimal('ubo3_share_percentage', 5, 2)->nullable();
            $table->text('ubo3_address')->nullable();

            // Final Signatory
            $table->string('signatory_first_name')->nullable();
            $table->string('signatory_last_name')->nullable();
            $table->string('signatory_function')->nullable();
            $table->date('signatory_date')->nullable();
            $table->string('signature_file')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_fours');
    }
};
