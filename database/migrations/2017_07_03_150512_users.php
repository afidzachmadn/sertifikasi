<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_name', 100);
            $table->string('email', 100)->unique();
            $table->string('password', 500);
            $table->string('img_url', 100);
            $table->string('telp', 20);
            $table->string('address', 500);
            $table->text('description');
            $table->integer('permission');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('users', function (Blueprint $table) {
        //     $table->drop()
        // });
        Schema::drop('users');
    }
}