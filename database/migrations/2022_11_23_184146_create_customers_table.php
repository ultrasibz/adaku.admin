<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('mobile')->unique();
            $table->string('occupation');
            $table->string('nationality');
            $table->string('address');
            $table->string('area');
            $table->string('town');
            $table->string('province');
            $table->string('country');


            $table->string('next_of_kin_firstname');
            $table->string('next_of_kin_lastname');
            $table->string('next_of_kin_mobile');
            $table->string('next_of_kin_email');
            $table->string('email')->unique();
            $table->string('password');
            $table->softDeletes();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
};
