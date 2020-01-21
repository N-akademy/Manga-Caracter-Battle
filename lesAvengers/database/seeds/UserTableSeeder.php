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
            'name'=>'Adam',
            'lastName'=>'Agoune',
            'email'=>'a.agoune@it-students.fr',
            'password'=>bcrypt('12345678'),
        ]);

        DB::table('users')->insert([
            'name'=>'Norhen',
            'lastName'=>'Wachani',
            'email'=>'n.wachani@it-students.fr',
            'password'=>bcrypt('12345678'),
        ]);
    }
}
