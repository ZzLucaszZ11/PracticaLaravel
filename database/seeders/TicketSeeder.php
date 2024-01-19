<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tickets')->insert([
            [
                'date' => '2000-02-11',
                'price' => 12,
                'train_id' => 1,
                'ticket_type_id' => 1
            ],
            [
                'date' => '2004-09-05',
                'price' => 20,
                'train_id' => 2,
                'ticket_type_id' => 2
            ],
            [
                'date' => '1994-11-23',
                'price' => 43,
                'train_id' => 3,
                'ticket_type_id' => 3
            ]
         ]);
    }
}
