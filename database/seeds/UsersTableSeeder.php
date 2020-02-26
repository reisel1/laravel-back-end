<?php

use Illuminate\Database\Seeder;
//use Illuminate\Support\Facades\DB;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $users = array(
        ['name' => 'test1','email'=>'test1@gmail.com','password'=>bcrypt('test1123123'),'role_id'=>1,'permission_id'=>1],
        ['name' => 'test2','email'=>'test2@gmail.com','password'=>bcrypt('test1123123'),'role_id'=>1,'permission_id'=>1]
        );
    	DB::table('users')->insert( $users );
    }
}
