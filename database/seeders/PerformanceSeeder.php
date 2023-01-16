<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PerformanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('performance')->insert([
            [
            'name_of_performance'=> 'Забранените фокуси на Ненчо',
            'performance_date' => '2023-01-23',

            'venue_id'=>1
            ],
            [
                'name_of_performance'=> 'Лисичета',
                'performance_date' => '2023-01-27',
                'venue_id'=>1
            ],
            [
                'name_of_performance'=> 'Забранените фокуси на Ненчо',
                'performance_date' => '2023-01-23',
                'venue_id'=>2
            ],
            [
                'name_of_performance'=> 'Народът на Вазов',
                'performance_date' => '2023-02-23',
                'venue_id'=>2
            ],
            [
                'name_of_performance'=> 'Облог',
                'performance_date' => '2023-01-18',
                'venue_id'=>3
            ],
            [
                'name_of_performance'=> 'Сапунена фантазия',
                'performance_date' => '2023-03-23',
                'venue_id'=>3
            ],
            [
                'name_of_performance'=> 'Синът',
                'performance_date' => '2023-05-07',
                'venue_id'=>4
            ],
            [
                'name_of_performance'=> 'Три високи жени',
                'performance_date' => '2023-04-12',
                'venue_id'=>4
            ],
            [
                'name_of_performance'=> 'Хитър Петър',
                'performance_date' => '2023-05-02',
                'venue_id'=>5
            ],
            [
                'name_of_performance'=> 'Хъшове',
                'performance_date' => '2023-03-23',
                'venue_id'=>5
            ],
            [
                'name_of_performance'=> 'Догодина по същото време',
                'performance_date' => '2023-01-18',
                'venue_id'=>6
            ],
            [
                'name_of_performance'=> 'Контрабасът',
                'performance_date' => '2023-06-01',
                'venue_id'=>6
            ],
            [
                'name_of_performance'=> 'Веселата карета',
                'performance_date' => '2023-02-19',
                'venue_id'=>4
            ],
            [
                'name_of_performance'=> 'Пиано в тревата',
                'performance_date' => '2023-01-19',
                'venue_id'=>2
            ],
            [
                'name_of_performance'=> 'Джак и бобеното стъбло',
                'performance_date' => '2023-01-24',
                'venue_id'=>1
            ],
            [
                'name_of_performance'=> 'Джак и бобеното стъбло',
                'performance_date' => '2023-01-24',
                'venue_id'=>1
            ],
        ]);

    }
}
