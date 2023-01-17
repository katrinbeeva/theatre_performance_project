<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



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
            'image'=>'assets/image for performances/Забранените фокуси на Ненчо.jpeg',
                'venue_id'=>'1'
            ],
            [
                'image'=>'assets/image for performances/Лисичета.jpg',
                'name_of_performance'=> 'Лисичета',
                'performance_date' => '2023-01-27',
                'venue_id'=>'1'
            ],
            [
                'image'=>'assets/image for performances/Гласове под наем.jpeg',
                'name_of_performance'=> 'Гласове под наем',
                'performance_date' => '2023-07-23',
                'venue_id'=>'2'
            ],
            [
                'image'=>'assets/image for performances/Народът на Вазов.jpeg',
                'name_of_performance'=> 'Народът на Вазов',
                'performance_date' => '2023-02-23',
                'venue_id'=>'2'
            ],
            [
            'image'=>'assets/image for performances/Облог.jpeg',
                'name_of_performance'=> 'Облог',
                'performance_date' => '2023-01-18',
                'venue_id'=>'3'
            ],
            [
                'image'=>'assets/image for performances/Сапунена фантазия.jpeg',
                'name_of_performance'=> 'Сапунена фантазия',
                'performance_date' => '2023-03-23',
                'venue_id'=>'1'
            ],
            [
            'image'=>'assets/image for performances/Синът.jpeg',
                'name_of_performance'=> 'Синът',
                'performance_date' => '2023-05-07',
                'venue_id'=>'4'
            ],
            [
                'image'=>'assets/image for performances/Три високи жени.jpg',
                'name_of_performance'=> 'Три високи жени',
                'performance_date' => '2023-04-12',
               'venue_id'=>'4'
            ],
            [
            'image'=>'assets/image for performances/Хитър Петър.jpeg',
                'name_of_performance'=> 'Хитър Петър',
                'performance_date' => '2023-05-02',
               'venue_id'=>'1'
            ],
            [
                'image'=>'assets/image for performances/Хъшове.jpeg',
                'name_of_performance'=> 'Хъшове',
                'performance_date' => '2023-03-23',
                'venue_id'=>'1'
            ],
            [
            'image'=>'assets/image for performances/Догодина по същото време.jpeg',
                'name_of_performance'=> 'Догодина по същото време',
                'performance_date' => '2023-01-18',
                'venue_id'=>'6'
            ],
            [
                'image'=>'assets/image for performances/Контрабасът.jpg',
                'name_of_performance'=> 'Контрабасът',
                'performance_date' => '2023-06-01',
                'venue_id'=>'6'
            ],
            [
                'image'=>'assets/image for performances/Веселата карета.jpeg',
                'name_of_performance'=> 'Веселата карета',
                'performance_date' => '2023-02-19',
               'venue_id'=>'1'
            ],
            [
                'image'=>'assets/image for performances/Пиано в тревата.jpeg',
                'name_of_performance'=> 'Пиано в тревата',
                'performance_date' => '2023-01-19',
                'venue_id'=>'8'
            ],
            [
            'image'=>'assets/image for performances/Джак и бобеното стъбло.jpeg',
                'name_of_performance'=> 'Джак и бобеното стъбло',
                'performance_date' => '2023-01-24',
                'venue_id'=>'9'
            ],
            [
                'image'=>'assets/image for performances/Зимата на нашето недоволство.jpeg',
                'name_of_performance'=> 'Зимата на нашето недоволство',
                'performance_date' => '2023-01-24',
                'venue_id'=>'12'
            ],
        ]);

    }
}
