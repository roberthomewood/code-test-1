<?php

namespace Database\Seeders;

use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
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
        User::factory()
            ->create([
                'email' => 'admin@admin.com',
                'password' => Hash::make('password')
            ]);    

        $this->call([
            CompanySeeder::class,
            EmployeeSeeder::class
        ]);
    }
}
