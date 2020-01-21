<?php

use Illuminate\Database\Seeder;

class GamerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gamers')->insert([
            'name'=>'Sangoku',
            'attack'=>'Kaméameha',
            'lifePoint'=>'1000',
            'power'=>'60',
        ]);

        DB::table('gamers')->insert([
            'name'=>'Vegeta',
            'attack'=>'Garick Gun',
            'lifePoint'=>'1000',
            'power'=>'60',
        ]);
        
        DB::table('gamers')->insert([
            'name'=>'Luffy',
            'attack'=>'Éléphant Gun',
            'lifePoint'=>'700',
            'power'=>'60',
        ]);

        DB::table('gamers')->insert([
            'name'=>'Zoro',
            'attack'=>'Technique à 3 Sabre',
            'lifePoint'=>'650',
            'power'=>'60',
        ]);

        DB::table('gamers')->insert([
            'name'=>'Naruto Uzumaki',
            'attack'=>'Razengan',
            'lifePoint'=>'700',
            'power'=>'60',
        ]);

        DB::table('gamers')->insert([
            'name'=>'Sasuke Uchiwa',
            'attack'=>'Milles Oiseaux',
            'lifePoint'=>'700',
            'power'=>'60',
        ]);

        DB::table('gamers')->insert([
            'name'=>'Asta',
            'attack'=>'Épéiste Expert',
            'lifePoint'=>'500',
            'power'=>'60',
        ]);

        DB::table('gamers')->insert([
            'name'=>'Juno',
            'attack'=>'Magie de Vent',
            'lifePoint'=>'500',
            'power'=>'60',
        ]);

        DB::table('gamers')->insert([
            'name'=>'Saïtama',
            'attack'=>'Frappe bien Vénère',
            'lifePoint'=>'650',
            'power'=>'60',
        ]);

        DB::table('gamers')->insert([
            'name'=>'Xenos',
            'attack'=>'Machingan Buro',
            'lifePoint'=>'450',
            'power'=>'60',
        ]);

        DB::table('gamers')->insert([
            'name'=>'Ichigo Kurosaki',
            'attack'=>'Getsuga Tensho',
            'lifePoint'=>'700',
            'power'=>'60',
        ]);

        DB::table('gamers')->insert([
            'name'=>'Yoruichi Shihōin',
            'attack'=>'Zanpakuto',
            'lifePoint'=>'700',
            'power'=>'60',
        ]);

        DB::table('gamers')->insert([
            'name'=>'Sangohan',
            'attack'=>'Kaméhaméa',
            'lifePoint'=>'900',
            'power'=>'60',
        ]);
    }
}
