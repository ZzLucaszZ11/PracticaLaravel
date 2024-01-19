<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('trains')->insert([
            [
                'name' => 'Velociraptor',
                'passengers' => 120,
                'year' => 2010,
                'train_type_id' => 1
            ],
            [
                'name' => 'Trex',
                'passengers' => 200,
                'year' => 2007,
                'train_type_id' => 2
            ],
            [
                'name' => 'ElÁguila',
                'passengers' => 777,
                'year' => 1945,
                'train_type_id' => 3
            ]
         ]);
    }
}
