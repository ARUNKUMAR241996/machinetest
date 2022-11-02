<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SlotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('slot')->delete();
        \DB::table('slot')->insert(array (
            0 => 
            array (
                //'id' => 1,
                'slots' => 'A01',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                //'id' => 2,
                'slots' => 'A02',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                //'id' => 3,
                'slots' => 'A03',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                //'id' => 4,
                'slots' => 'A04',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                //'id' => 5,
                'slots' => 'A05',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                //'id' => 5,
                'slots' => 'A06',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                //'id' => 5,
                'slots' => 'A07',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                //'id' => 5,
                'slots' => 'A08',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                //'id' => 5,
                'slots' => 'A09',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                //'id' => 5,
                'slots' => 'A10',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
    }
}
