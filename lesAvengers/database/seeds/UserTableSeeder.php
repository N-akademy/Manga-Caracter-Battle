<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'firstName'=>'Adam',
            'lastName'=>'Agoune',
            'email'=>'a.agoune@it-students.fr',
            'password'=>'1234',
        ]);

        DB::table('users')->insert([
            'firstName'=>'Norhen',
            'lastName'=>'Wachani',
            'email'=>'n.wachani@it-students.fr',
            'password'=>'1234',
        ]);
    }
}
