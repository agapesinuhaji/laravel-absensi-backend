<?php

namespace Database\Seeders;

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
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'priahitam',
            'email' => 'priahitam@example.com',
            'password' => Hash::make('12345678'),
        ]);


        \App\Models\Company::create([
            'name' => 'PT. Pria Hitam',
            'email' => 'user@priahitam.com',
            'address' => 'Jl. Pembangunan No. 12a, Tambak Lau Mulgap II, Kec. Berastagi, Kab. Karo, Sumatera Utara 22152',
            'latitude' => '-7.747033',
            'longitude' => '110.355398',
            'radius_km' => '0.5',
            'time_in' => '08:00',
            'time_out' => '17:00',
        ]);


        $this->call([
            AttendanceSeeder::class,
            PermissionSeeder::class,
        ]);


    }
}
