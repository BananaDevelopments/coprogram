<?php

/**
 * Created by PhpStorm.
 * User: Sergio
 * Date: 5/7/2016
 * Time: 2:57 PM
 */

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {
   public function run() {
       DB::table('users')->delete();

       $users = array(
           ['id' => 1, 'email' => 'admin@admin.admin' , 'password' => md5('pass'), 'is_admin' => TRUE, 'created_at' => new DateTime, 'updated_at' => new DateTime],
           ['id' => 2, 'email' => 'user1@user.user' , 'password' => md5('pass'), 'is_admin' => FALSE, 'created_at' => new DateTime, 'updated_at' => new DateTime],
           ['id' => 3, 'email' => 'user2@user.user' , 'password' => md5('pass'), 'is_admin' => FALSE, 'created_at' => new DateTime, 'updated_at' => new DateTime]
       );
       
       DB::table('users')->insert($users);
   }
}