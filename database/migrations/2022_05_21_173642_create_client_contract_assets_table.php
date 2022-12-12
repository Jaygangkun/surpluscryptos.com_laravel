<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_contract_assets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id')->nullable();
            $table->unsignedBigInteger('partner_id')->nullable();
            $table->unsignedBigInteger('contract_asset_id')->nullable();
            $table->string('initial_amount')->nullable();
            $table->string('years')->nullable();
            $table->string('min_amount')->nullable();
            $table->string('max_amount')->nullable();
            $table->string('guaranteed_rate')->nullable();
            $table->string('commission_percent')->nullable();
            $table->string('crypto_value_at_maturity')->nullable();
            $table->string('beneficiary_type')->nullable();
            $table->string('prefix_name')->nullable();
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('suffix_name')->nullable();
            $table->string('trust_name')->nullable();
            $table->string('street')->nullable();
            $table->string('street2')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('tax_number')->nullable();
            $table->string('beneficiary_gender')->nullable();
            $table->date('beneficiary_dob')->nullable();
            $table->string('beneficiary_ssn')->nullable();
            $table->string('beneficiary_relationship')->nullable();
            $table->string('allocation_percent')->nullable();
            $table->string('beneficiary_email')->nullable();
            $table->string('beneficiary_email2')->nullable();
            $table->string('beneficiary_irrevocable')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('transaction_id')->nullable();
            $table->string('transaction_reference')->nullable();
            $table->string('transaction_amount')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client_contract_assets');
    }
};
