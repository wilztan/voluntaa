<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'id'=>1,
        	'name'=>'admin',
        	'email'=>'admin@voluntaa.com',
        	'password'=>bcrypt('adminvoluntaa'),
        	'phone'=>'085754557777',
        	'gender'=>'male',
        	'location'=>'Jakarta',
        	'address'=>'Voluntaa St',
        	'websites'=>'www.bncc.net',
        	'imgUrl'=>'public\img\users\nopic.png',
        	'status'=>'admin',
        	]);
    }
}
