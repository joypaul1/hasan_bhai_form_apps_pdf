<?php
// database/migrations/2025_07_19_000001_create_form_1_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForm1Table extends Migration
{
    public function up()
    {
        Schema::create('form_1', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('customer_id');

            // Kooperations­­partner
            $table->string('restaurantname');
            $table->string('owner_name');
            $table->string('managing_director');
            $table->text('post_address');

            // Kontaktdaten
            $table->string('contact_person');
            $table->string('phone_number');
            $table->string('mobile_number');
            $table->string('email');

            // Standortdaten
            $table->text('location_address')->nullable();
            $table->date('start_date')->nullable();
            $table->string('opening_hours_days')->nullable();

            // Sonstige Daten
            $table->string('vat_id')->nullable();
            $table->string('iban')->nullable();

            // Startgebühr
            $table->decimal('start_fee', 8, 2)->default(0);

            // Benötigte zusätzliche Küchenausstattung
            $table->text('additional_kitchen_equipment')->nullable();

            // Auslieferung (checkboxes)
            $table->boolean('delivery_licensee')->default(false);
            $table->boolean('delivery_platform')->default(false);

            // Signatures
            $table->string('signature_licensee')->nullable();
            $table->string('signature_licensor')->nullable();

            $table->timestamps();

            // Foreign key
            $table
                ->foreign('customer_id')
                ->references('id')
                ->on('customers')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('form_1');
    }
}
