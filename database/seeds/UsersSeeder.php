<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 15-12-24
 * Time: 上午9:56
 */
//namespace App;
//use Illuminate\Database\Seeder;

    class UsersSeeder extends Seeder
    {
        public function run()
        {
            User::create([
               'email'=>'admin@sohu.com',
                'password'=>Hash::make(''),
                'nickname'=>'admin',
                'is_admin'=>1
            ]);
        }
    }