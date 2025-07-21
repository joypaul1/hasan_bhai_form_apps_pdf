<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    public function up()
    {
        Schema::create('form_threes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('customer_id');
            // FK → customers
            $table->foreign('customer_id')
                ->references('id')->on('customers')
                ->onDelete('cascade');

            // KETTEN NETZWERK
            $table->string('brand')->nullable();
            $table->string('chain')->nullable();
            $table->string('framework_agreement')->nullable();

            // GESCHÄFTSDETAILS
            $table->string('old_customer_number')->nullable();
            $table->string('legal_name')->nullable();
            $table->string('owner_name')->nullable();
            $table->string('company_phone')->nullable();
            $table->string('contact_person')->nullable();
            $table->string('contact_mobile')->nullable();
            $table->string('street')->nullable();
            $table->string('postal_code_city')->nullable();
            $table->string('billing_email')->nullable();
            $table->string('communication_email')->nullable();
            $table->string('commercial_register_number')->nullable();
            $table->string('vat_id')->nullable();
            $table->string('tax_number')->nullable();
            $table->boolean('has_eu_branch')->default(false);
            $table->boolean('is_pep')->default(false);

            // GEBÜHREN & ZAHLUNGEN
            $table->decimal('fee_own_delivery', 8, 2)->nullable();
            $table->decimal('fee_platform_delivery', 8, 2)->nullable();
            $table->decimal('fee_pickup', 8, 2)->nullable();
            $table->decimal('fee_online_payment', 8, 2)->nullable();
            $table->decimal('terminal_cost', 8, 2)->nullable();
            $table->decimal('banner_fee', 8, 2)->nullable();
            $table->decimal('setup_fee', 8, 2)->nullable();
            $table->decimal('monthly_fee', 8, 2)->nullable();
            $table->decimal('order_transmission_cost', 8, 2)->nullable();

            // Bankverbindung
            $table->string('account_holder')->nullable();
            $table->string('iban')->nullable();

            // UNTERZEICHNUNG
            $table->string('signatory_name')->nullable();
            $table->date('signatory_date')->nullable();
            $table->string('signature_file')->nullable();

            // ANGABEN ZUM STANDORT
            $table->string('site_name')->nullable();
            $table->string('site_category')->nullable();
            $table->string('site_street')->nullable();
            $table->string('site_postal_code_city')->nullable();
            $table->string('site_phone')->nullable();
            $table->string('site_contact_person')->nullable();
            $table->string('site_contact_mobile')->nullable();
            $table->string('site_customer_email')->nullable();

            // ÜBERSICHT & LEISTUNGEN
            $table->date('service_start_date')->nullable();
            $table->string('delivery_type')->nullable();
            $table->boolean('pickup_option')->default(false);
            $table->string('access_info')->nullable();
            $table->boolean('cash_payment')->default(false);
            $table->boolean('stempelkarte_participation')->default(false);
            $table->string('website_domain')->nullable();
            $table->string('connection_method')->nullable();

            // IHR LIEFERGEBIET
            $table->string('delivery_area_postal_codes')->nullable();
            $table->decimal('min_order_value', 8, 2)->nullable();
            $table->decimal('delivery_cost', 8, 2)->nullable();
            $table->decimal('free_delivery_threshold', 8, 2)->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_threes');
    }
};
