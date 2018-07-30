<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpeningAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opening_accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('surname');
            $table->string('other_name');
            $table->string('maiden_name');
            $table->string('gender');
            $table->string('date_of_birth');
            $table->string('occupation');
            $table->string('email');
            $table->string('nationality');
            $table->string('location');
            $table->string('contact');
            $table->string('contact2');
            $table->string('account_type');
            $table->string('personal_id');
            $table->string('valid_date');
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
        Schema::dropIfExists('opening_accounts');
    }
}
