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
            $table->string('file_upload_bukti_pembayaran_ISO', 500)->nullable();
            $table->string('status_pembayaran_ISO',100)->default('belum-terbayar');
            $table->string('status_ISO',100)->default('belum-terverifikasi');
            $table->string('Verifikator_ISO_name', 100)->nullable();
            $table->string('Verifikator_ID_ISO', 100)->nullable();
            $table->string('petugas_inspeksi_ISO_ID', 100)->nullable();
            $table->string('petugas_inspeksi_ISO_name', 100)->nullable();
            $table->string('petugas_inspeksi_nip_ISO', 100)->nullable();
            $table->string('surat_inspeksi_ISO', 100)->nullable();            
            $table->string('surat_pengesahan_ISO',100)->default('default-pengesahan-iso.pdf');





            $table->string('file_upload_sni_1', 500)->nullable();
            $table->string('file_upload_sni_2', 500)->nullable();
            $table->string('file_upload_sni_3', 500)->nullable();
            $table->string('file_upload_sni_4', 500)->nullable();
            $table->string('file_upload_sni_5', 500)->nullable();
            $table->string('file_upload_sni_6', 500)->nullable();
            $table->string('file_upload_bukti_pembayaran_SNI', 500)->nullable();
            $table->string('status_pembayaran_SNI',100)->default('belum-terbayar');
            $table->string('status_SNI',100)->default('belum-terverifikasi');
            $table->string('Verifikator_SNI_name', 100)->nullable();
            $table->string('Verifikator_ID_SNI', 100)->nullable();
            $table->string('petugas_inspeksi_SNI_ID', 100)->nullable();
            $table->string('petugas_inspeksi_SNI_name', 100)->nullable();
            $table->string('petugas_inspeksi_nip_SNI', 100)->nullable();
            $table->string('surat_inspeksi_SNI', 100)->nullable();            
            $table->string('surat_pengesahan_SNI',100)->default('default-pengesahan-sni.pdf');

            $table->text('description')->nullable();
            $table->integer('permission');
        });
        
        Schema::create('admin', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nip', 50);
            $table->string('name', 100);
            $table->string('email', 100)->unique();
            $table->string('password', 500);
            $table->string('img_url', 100)->default('users.png');
            $table->integer('jumlah_total_pendaftar_ISO_yang_diverifikasi');
            $table->integer('jumlah_total_pendaftar_SNI_yang_diverifikasi');


           
        }); 

        Schema::create('pegawai_lapangan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nip', 50);
            $table->string('name', 100);
            $table->string('jabatan', 100);
            $table->integer('jumlah_total_pendaftar_ISO_yang_diverifikasi');
            $table->integer('jumlah_total_pendaftar_SNI_yang_diverifikasi');


           
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
        Schema::drop('admin');
    }
    
}
