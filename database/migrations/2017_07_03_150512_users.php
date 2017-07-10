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
            $table->string('img_url', 100)->default('users.png');
            $table->string('telp', 20)->nullable();
            $table->string('address', 500)->nullable();
            $table->string('file_upload_iso_1', 500)->nullable();
            $table->string('file_upload_iso_2', 500)->nullable();
            $table->string('file_upload_iso_3', 500)->nullable();
            $table->string('file_upload_iso_4', 500)->nullable();
            $table->string('file_upload_iso_5', 500)->nullable();
            $table->string('file_upload_iso_6', 500)->nullable();

            $table->string('file_upload_sni_1', 500)->nullable();
            $table->string('file_upload_sni_2', 500)->nullable();
            $table->string('file_upload_sni_3', 500)->nullable();
            $table->string('file_upload_sni_4', 500)->nullable();
            $table->string('file_upload_sni_5', 500)->nullable();
            $table->string('file_upload_sni_6', 500)->nullable();
            $table->text('description')->nullable();
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
