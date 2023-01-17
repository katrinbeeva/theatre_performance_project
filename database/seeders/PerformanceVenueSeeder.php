<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PerformanceVenueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('performance_venue')->insert([
            'performance_id' => '1',
            'venue_id' => '1'
        ]);
        DB::table('performance_venue')->insert([
            'performance_id' => '2',
            'venue_id' => '1'
        ]);
        DB::table('performance_venue')->insert([
            'performance_id' => '3',
            'venue_id' => '2'
        ]);
        DB::table('performance_venue')->insert([
            'performance_id' => '4',
            'venue_id' => '2'
        ]);
        DB::table('performance_venue')->insert([
            'performance_id' => '5',
            'venue_id' => '2'
        ]);
        DB::table('performance_venue')->insert([
            'performance_id' => '5',
            'venue_id' => '1'
        ]);
        DB::table('performance_venue')->insert([
            'performance_id' => '6',
            'venue_id' => '4'
        ]);
        DB::table('performance_venue')->insert([
            'performance_id' => '7',
            'venue_id' => '4'
        ]);
        DB::table('performance_venue')->insert([
            'performance_id' => '8',
            'venue_id' => '1'
        ]);

        DB::table('performance_venue')->insert([
            'performance_id' => '9',
            'venue_id' => '1'
        ]);

        DB::table('performance_venue')->insert([
            'performance_id' => '10',
            'venue_id' => '6'
        ]);

        DB::table('performance_venue')->insert([
            'performance_id' => '11',
            'venue_id' => '6'
        ]);

        DB::table('performance_venue')->insert([
            'performance_id' => '12',
            'venue_id' => '1'
        ]);

        DB::table('performance_venue')->insert([
            'performance_id' => '13',
            'venue_id' => '8'
        ]);

        DB::table('performance_venue')->insert([
            'performance_id' => '14',
            'venue_id' => '9'
        ]);

        DB::table('performance_venue')->insert([
            'performance_id' => '15',
            'venue_id' => '12'
        ]);
    }
}
