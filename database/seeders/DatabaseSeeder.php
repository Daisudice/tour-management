<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::where('id', 1)->update([
            'address' => 'panglao area',
            'birth_date' => Carbon::create(1990, 3, 1)->toDateString(),
            'gender' => 'male',
            'id_type' => 'National ID',
            'id_number' => '12302131012',
            'contact_no' => '09991235321',
            'type' => 'admin'
        ]);
    }
}
