<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
          [
            "name"=>"aldo",
            "email"=>"aldo@gmail.com",
            "password"=>bcrypt(1234),
          ]
        ]);
    }
}
