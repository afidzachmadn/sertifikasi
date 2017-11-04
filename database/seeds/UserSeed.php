<?php

use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//-------------------------------------------------------------------------------------------------//
        DB::table('users')->insert([
            'company_name' => 'bulanbintang',
            'email' => 'bulanbintang@local.com',
            'password' => encrypt('bulanbintang'),
            'img_url' => 'users.png',
            'telp' => '',
            'address' => '',
            'description' => '',
            'permission' => 2
        ]);
        DB::table('users')->insert([
            'company_name' => 'damri',
            'email' => 'damri@local.com',
            'password' => encrypt('damri'),
            'img_url' => 'users.png',
            'telp' => '',
            'address' => '',
            'description' => '',
            'permission' => 2
        ]);
        DB::table('users')->insert([
            'company_name' => 'dinusair',
            'email' => 'dinusair@local.com',
            'password' => encrypt('dinusair'),
            'img_url' => 'users.png',
            'telp' => '',
            'address' => '',
            'description' => '',
            'permission' => 2
        ]);
        DB::table('users')->insert([
            'company_name' => 'helloworld',
            'email' => 'helloworld@local.com',
            'password' => encrypt('helloworld'),
            'img_url' => 'users.png',
            'telp' => '',
            'address' => '',
            'description' => '',
            'permission' => 2
        ]);
        DB::table('users')->insert([
            'company_name' => 'lorena',
            'email' => 'lorena@local.com',
            'password' => encrypt('lorena'),
            'img_url' => 'users.png',
            'telp' => '',
            'address' => '',
            'description' => '',
            'permission' => 2
        ]);
        DB::table('users')->insert([
            'company_name' => 'renata',
            'email' => 'renata@local.com',
            'password' => encrypt('renata'),
            'img_url' => 'users.png',
            'telp' => '',
            'address' => '',
            'description' => '',
            'permission' => 2
        ]);
        DB::table('users')->insert([
            'company_name' => 'rere',
            'email' => 'rere@local.com',
            'password' => encrypt('rere'),
            'img_url' => 'users.png',
            'telp' => '',
            'address' => '',
            'description' => '',
            'permission' => 2
        ]);
        DB::table('users')->insert([
            'company_name' => 'rimawisata',
            'email' => 'rimawisata@local.com',
            'password' => encrypt('rimawisata'),
            'img_url' => 'users.png',
            'telp' => '',
            'address' => '',
            'description' => '',
            'permission' => 2
        ]);
        DB::table('users')->insert([
            'company_name' => 'safari',
            'email' => 'safari@local.com',
            'password' => encrypt('safari'),
            'img_url' => 'users.png',
            'telp' => '',
            'address' => '',
            'description' => '',
            'permission' => 2
        ]);
        DB::table('users')->insert([
            'company_name' => 'salamsalaman',
            'email' => 'salamsalaman@local.com',
            'password' => encrypt('salamsalaman'),
            'img_url' => 'users.png',
            'telp' => '',
            'address' => '',
            'description' => '',
            'permission' => 2
        ]);
        DB::table('users')->insert([
            'company_name' => 'suburjaya',
            'email' => 'suburjaya@local.com',
            'password' => encrypt('suburjaya'),
            'img_url' => 'users.png',
            'telp' => '',
            'address' => '',
            'description' => '',
            'permission' => 2
        ]);
        DB::table('users')->insert([
            'company_name' => 'sumberkencono',
            'email' => 'sumberkencono@local.com',
            'password' => encrypt('sumberkencono'),
            'img_url' => 'users.png',
            'telp' => '',
            'address' => '',
            'description' => '',
            'permission' => 2
        ]);
        DB::table('users')->insert([
            'company_name' => 'umbulmulyo',
            'email' => 'umbulmulyo@local.com',
            'password' => encrypt('umbulmulyo'),
            'img_url' => 'users.png',
            'telp' => '',
            'address' => '',
            'description' => '',
            'permission' => 2
        ]);
        DB::table('users')->insert([
            'company_name' => 'webomal',
            'email' => 'webomal@local.com',
            'password' => encrypt('webomal'),
            'img_url' => 'users.png',
            'telp' => '',
            'address' => '',
            'description' => '',
            'permission' => 2
        ]);
        DB::table('users')->insert([
            'company_name' => 'widiyuta',
            'email' => 'widiyuta@local.com',
            'password' => encrypt('widiyuta'),
            'img_url' => 'users.png',
            'telp' => '',
            'address' => '',
            'description' => '',
            'permission' => 2
        ]);
        DB::table('users')->insert([
            'company_name' => 'zeus',
            'email' => 'zeus@local.com',
            'password' => encrypt('zeus'),
            'img_url' => 'users.png',
            'telp' => '',
            'address' => '',
            'description' => '',
            'permission' => 2
        ]);

//-----------------------------------------------------------------------------------------------//






//-------------------------------------------------------------------------------------------------//
         DB::table('admin')->insert([
            'nip' => '12345678910111213',
            'name' => 'Admin 1',
            'email' => 'admin1@local.com',
            'password' => encrypt('admin1'),
            'img_url' => 'users.png',
            'jumlah_total_pendaftar_ISO_yang_diverifikasi' => '0',
            'jumlah_total_pendaftar_SNI_yang_diverifikasi' => '0'
        ]);

        DB::table('admin')->insert([
            'nip' => '123456722210111213',
            'name' => 'Admin 2',
            'email' => 'admin2@local.com',
            'password' => encrypt('admin2'),
            'img_url' => 'users.png',
            'jumlah_total_pendaftar_ISO_yang_diverifikasi' => '0',
            'jumlah_total_pendaftar_SNI_yang_diverifikasi' => '0'
        ]);

        DB::table('admin')->insert([
            'nip' => '123226722210111213',
            'name' => 'Admin 3',
            'email' => 'admin3@local.com',
            'password' => encrypt('admin3'),
            'img_url' => 'users.png',
            'jumlah_total_pendaftar_ISO_yang_diverifikasi' => '0',
            'jumlah_total_pendaftar_SNI_yang_diverifikasi' => '0'
        ]);
//-----------------------------------------------------------------------------------------------//








//------------------------------------------------------------------------------------------------//
        DB::table('pegawai_lapangan')->insert([
            'nip' => '12345678910',
            'email'=>'parto@local.com',
            'password'=>encrypt('parto'),
            'name' => 'Parto',
            'jabatan' => 'Pelaksana Junior',
            'jumlah_total_pendaftar_ISO_yang_diverifikasi' => '0',
            'jumlah_total_pendaftar_SNI_yang_diverifikasi' => '0'
        ]);

        DB::table('pegawai_lapangan')->insert([
            'nip' => '12345678911',
            'email'=>'bapak@local.com',
            'password'=>encrypt('bapak'),
            'name' => 'Bapak',
            'jabatan' => 'Pelaksana Junior',
            'jumlah_total_pendaftar_ISO_yang_diverifikasi' => '0',
            'jumlah_total_pendaftar_SNI_yang_diverifikasi' => '0'
        ]);

        DB::table('pegawai_lapangan')->insert([
            'nip' => '12345678912',
            'email'=>'ciripa@local.com',
            'password'=>encrypt('ciripa'),
            'name' => 'Ciripa',
            'jabatan' => 'Pelaksana Junior',
            'jumlah_total_pendaftar_ISO_yang_diverifikasi' => '0',
            'jumlah_total_pendaftar_SNI_yang_diverifikasi' => '0'
        ]);

        DB::table('pegawai_lapangan')->insert([
            'nip' => '12345678913',
            'email'=>'elvis@local.com',
            'password'=>encrypt('elvis'),
            'name' => 'Elvis',
            'jabatan' => 'Pelaksana Junior',
            'jumlah_total_pendaftar_ISO_yang_diverifikasi' => '0',
            'jumlah_total_pendaftar_SNI_yang_diverifikasi' => '0'
        ]);

        DB::table('pegawai_lapangan')->insert([
            'nip' => '12345678914',
            'email'=>'handoko@local.com',
            'password'=>encrypt('handoko'),
            'name' => 'Handoko',
            'jabatan' => 'Pelaksana Junior',
            'jumlah_total_pendaftar_ISO_yang_diverifikasi' => '0',
            'jumlah_total_pendaftar_SNI_yang_diverifikasi' => '0'
        ]);
        DB::table('pegawai_lapangan')->insert([
            'nip' => '12345678915',
            'email'=>'dery@local.com',
            'password'=>encrypt('dery'),
            'name' => 'Dery',
            'jabatan' => 'Pelaksana Junior',
            'jumlah_total_pendaftar_ISO_yang_diverifikasi' => '0',
            'jumlah_total_pendaftar_SNI_yang_diverifikasi' => '0'
        ]);
    }
}
