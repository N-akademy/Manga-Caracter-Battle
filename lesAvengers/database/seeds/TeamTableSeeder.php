<?php

use Illuminate\Database\Seeder;

class TeamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            'name'=>'Dragon Ball',
        ]);
        DB::table('teams')->insert([
            'name'=>'One Piece',
        ]);
        DB::table('teams')->insert([
            'name'=>'Naruto',
        ]);
        DB::table('teams')->insert([
            'name'=>'Black Clover',
        ]);
        DB::table('teams')->insert([
            'name'=>'One Punch Man',
        ]);
        DB::table('teams')->insert([
            'name'=>'Bleach',
        ]);
    }
}
