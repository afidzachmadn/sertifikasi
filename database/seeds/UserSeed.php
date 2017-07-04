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
    }
}