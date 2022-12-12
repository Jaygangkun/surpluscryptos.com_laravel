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
        Schema::create('temp_users', function (Blueprint $table) {
            $table->id();
            $table->string('email')->nullable();
            $table->string('email_verify_code')->nullable();
            $table->string('phone_verify_code')->nullable();
            $table->string('password')->nullable();
            $table->string('email_verified')->nullable();
            $table->string('phone')->nullable();
            $table->string('partner_code')->nullable();
            $table->string('name_prefix')->nullable();
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('name_suffix')->nullable();
            $table->string('street')->nullable();
            $table->string('unit_number')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('gender')->nullable();
            $table->date('dob')->nullable();
            $table->date('stn')->nullable();
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
        Schema::dropIfExists('temp_users');
    }
};
