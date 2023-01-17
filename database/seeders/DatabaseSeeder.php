<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Venue;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call([
            PerformanceSeeder::class,
            VenueSeeder::class,
            TicketSeeder::class,
            PerformanceVenueSeeder::class,
            UserSeeder::class,
        ]);
    }
}
