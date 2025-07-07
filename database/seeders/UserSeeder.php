<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'name' => 'Echa',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('12345'),
            ]
        ])->each(function($data){
            User::create($data);
        });
    }
}
