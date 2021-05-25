<?php

use Illuminate\Database\Seeder;

class MachineTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('machines')->insert([
            'name' => 'Dangote',
            'price' => 4,
            'image' => '',
            'brand' => 'Foreign',
            'category' => 'Heavy Duty'
        ]);
        DB::table('machines')->insert([
            'name' => 'hala',
            'price' => 4,
            'image' => '',
            'brand' => 'honda',
            'category' => 'sedan'
        ]);
        DB::table('machines')->insert([
            'name' => 'rav4',
            'price' => 4,
            'image' => '',
            'brand' => 'toyota',
            'category' => 'jeep'
        ]);
        DB::table('machines')->insert([
            'name' => 'siena',
            'price' => 4,
            'image' => '',
            'brand' => 'honda',
            'category' => 'mini van'
        ]);
        DB::table('machines')->insert([
            'name' => 'tacoma',
            'price' => 4,
            'image' => '',
            'brand' => 'toyota',
            'category' => 'truck'
        ]);
        DB::table('machines')->insert([
            'name' => 'coasta',
            'price' => 4,
            'image' => '',
            'brand' => 'toyota',
            'category' => 'bus'
        ]);
        DB::table('machines')->insert([
            'name' => 'lambo',
            'price' => 4,
            'image' => '',
            'brand' => 'ferrari',
            'category' => 'sports car'
        ]);
    }
}
