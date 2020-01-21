<?php

use Illuminate\Database\Seeder;

class GamerTeamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gamer_team')->insert([
            'gamer'=>'1',
            'team'=>'1',
        ]);

        DB::table('gamer_team')->insert([
            'gamer'=>'2',
            'team'=>'1',
        ]);

        DB::table('gamer_team')->insert([
            'gamer'=>'3',
            'team'=>'2',
        ]);

        DB::table('gamer_team')->insert([
            'gamer'=>'4',
            'team'=>'2',
        ]);

        DB::table('gamer_team')->insert([
            'gamer'=>'5',
            'team'=>'3',
        ]);

        DB::table('gamer_team')->insert([
            'gamer'=>'6',
            'team'=>'3',
        ]);

        DB::table('gamer_team')->insert([
            'gamer'=>'7',
            'team'=>'4',
        ]);

        DB::table('gamer_team')->insert([
            'gamer'=>'8',
            'team'=>'4',
        ]);

        DB::table('gamer_team')->insert([
            'gamer'=>'9',
            'team'=>'5',
        ]);
        DB::table('gamer_team')->insert([
            'gamer'=>'10',
            'team'=>'5',
        ]);

        DB::table('gamer_team')->insert([
            'gamer'=>'11',
            'team'=>'6',
        ]);

        DB::table('gamer_team')->insert([
            'gamer'=>'12',
            'team'=>'6',
        ]);

        DB::table('gamer_team')->insert([
            'gamer'=>'13',
            'team'=>'1',
        ]);
    }
}
