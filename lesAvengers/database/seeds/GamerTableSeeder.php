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
            'attack'=>'kameameha',
            'lifePoint'=>'1000',
            'power'=>'60',
        ]);

        DB::table('gamers')->insert([
            'name'=>'Vegeta',
            'attack'=>'garick gun',
            'lifePoint'=>'1000',
            'power'=>'60',
        ]);
        
        DB::table('gamers')->insert([
            'name'=>'Luffy',
            'attack'=>'éléphant gun',
            'lifePoint'=>'700',
            'power'=>'60',
        ]);

        DB::table('gamers')->insert([
            'name'=>'Zoro',
            'attack'=>'technique à 3 sabre',
            'lifePoint'=>'650',
            'power'=>'60',
        ]);

        DB::table('gamers')->insert([
            'name'=>'Naruto Uzumaki',
            'attack'=>'razengan',
            'lifePoint'=>'700',
            'power'=>'60',
        ]);

        DB::table('gamers')->insert([
            'name'=>'Sasuke Uchiwa',
            'attack'=>'milles oiseaux',
            'lifePoint'=>'700',
            'power'=>'60',
        ]);

        DB::table('gamers')->insert([
            'name'=>'Asta',
            'attack'=>'épéiste expert',
            'lifePoint'=>'500',
            'power'=>'60',
        ]);

        DB::table('gamers')->insert([
            'name'=>'Juno',
            'attack'=>'magie de vent',
            'lifePoint'=>'500',
            'power'=>'60',
        ]);

        DB::table('gamers')->insert([
            'name'=>'Saïtama',
            'attack'=>'frappe bien venere',
            'lifePoint'=>'650',
            'power'=>'60',
        ]);

        DB::table('gamers')->insert([
            'name'=>'Xenos',
            'attack'=>'machingan buro',
            'lifePoint'=>'450',
            'power'=>'60',
        ]);

        DB::table('gamers')->insert([
            'name'=>'Ichigo Kurosaki',
            'attack'=>'getsuga tensho',
            'lifePoint'=>'700',
            'power'=>'60',
        ]);

        DB::table('gamers')->insert([
            'name'=>'Yoruichi Shihōin',
            'attack'=>'zanpakuto',
            'lifePoint'=>'700',
            'power'=>'60',
        ]);
    }
}
