<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::create([
            'name' => 'email',
            'value' => 'touche@gmail.com',
        ]);

        Setting::create([
            'name' => 'phone',
            'value' => '123456789',
        ]);

        Setting::create([
            'name' => 'address',
            'value' => '1234 Main St',
        ]);

        Setting::create([
            'name' => 'city',
            'value' => 'New York',
        ]);
    }
}
