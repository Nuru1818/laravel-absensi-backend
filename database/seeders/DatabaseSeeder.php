<?php

namespace Database\Seeders;

use App\Models\Attendance;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
        ]);

        //data dummy for company
        \App\Models\Company::create([
            'name' => 'PT FIC 16',
            'email' => 'info@fic16.com',
            'address' => 'jl. TB. Simatupang 1A Jakarta Selatan',
            'latitide' => '-6.297860024739768',
            'lognitude' => '106.84413934452617',
            'radius_km' => '0,5',
            'time_in' => '08:00',
            'time_out' => '17:00',
        ]);

        //data dummy for attendance auto generate
        $this->call([
            AttendanceSeeder::class,
        ]);
    }
}
