<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tickets')->insert([
            [
                'type_of_ticket'=> 'Детски',
                'price' => '5.00 лв.',
            ],
            [
                'type_of_ticket'=> 'Студентски',
                'price' => '6.00 лв.',
            ],
            [
                'type_of_ticket'=> 'За възрастни',
                'price' => '7.00 лв.',
            ],
        ]);
    }
}
