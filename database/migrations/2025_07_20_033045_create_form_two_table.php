<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormTwoTable extends Migration
{
    public function up()
    {
        Schema::create('form_two', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('customer_id');

            // §1: Betriebsdatenblatt Kundenanlage
            $table->date('date');
            $table->string('company_name');
            $table->text('billing_address');
            $table->text('delivery_address');
            $table->string('bank_details');
            $table->string('vat_id_number');
            $table->string('tax_number');
            $table->string('primary_contact');
            $table->string('mobile_number');
            $table->string('email');
            $table->string('landline');

            // §2: Nur für Trans Gourmet (optional)
            $table->date('first_delivery_date')->nullable();
            $table->string('handheld_contact')->nullable();
            $table->string('email_trans_gourmet')->nullable();

            $table->timestamps();

            // FK → customers
            $table->foreign('customer_id')
                ->references('id')->on('customers')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('form_two');
    }
}
