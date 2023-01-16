<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VenueSeeder extends Seeder
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
                'name_of_theatre'=> 'Народен театър "Иван Вазов"',
                'location' => 'ул. „Дякон Игнатий“ 5, 1000 София център',
                'city'=>'София'
            ],
            [
                'name_of_theatre'=> 'Летен театър',
                'location' => 'Приморски парк, 9002 Приморски',
                'city'=>'Варна'
            ],
            [
                'name_of_theatre'=> 'Сълза и смях',
                'location' => ' ул. „Георги С. Раковски“ 127, 1000 София център',
                'city'=>'София'
            ],
            [
                'name_of_theatre'=> 'Драматичен театър',
                'location' => 'ул. „Княз Александър I-ви“ 38, 4000 Център',
                'city'=>'Пловдив'
            ],
            [
                'name_of_theatre'=> 'Античен театър',
                'location' => 'ул. „Дякон Игнатий“ 5, 1000 София център, София',
                'city'=>'Пловдив'
            ],
            [
                'name_of_theatre'=> 'Младежки театър "Николай Бинев',
                'location' => 'бул. „Княз Александър Дондуков" 8, 1000 София център',
                'city'=>'София'
            ],
            [
                'name_of_theatre'=> 'Народен театър "Иван Вазов"',
                'location' => 'ул. „Дякон Игнатий“ 5, 1000 София център, София',
                'city'=>'София'
            ],
            [
                'name_of_theatre'=> 'Народен театър "Иван Вазов"',
                'location' => 'ул. „Дякон Игнатий“ 5, 1000 София център, София',
                'city'=>'София'
            ],
            [
                'name_of_theatre'=> 'Народен театър "Иван Вазов"',
                'location' => 'ул. „Дякон Игнатий“ 5, 1000 София център, София',
                'city'=>'София'
            ],
            [
                'name_of_theatre'=> 'Театър Българска армия',
                'location' => 'ул. „Георги С. Раковски“ 98, 1000 София център',
                'city'=>'София'
            ],
        ]);

    }
}
