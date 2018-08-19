<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDriversTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drivers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('f_name');
            $table->string('l_name');
            $table->string('phone_no');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('address');
            $table->string('next_of_kin')->nullable();
            $table->string('next_address')->nullable();
            $table->string('bank_name');
            $table->string('bank_account');
            $table->string('state');
            $table->string('d_o_b');
            $table->string('nationality');
            $table->string('lga');
            $table->string('picture');
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
        Schema::drop('drivers');
    }
}
