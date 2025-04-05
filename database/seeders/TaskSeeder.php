<?php

namespace Database\Seeders;

use App\Models\TaskManager;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class TaskSeeder extends Seeder
{

    public function run(): void
    {
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 10; $i++) {
            TaskManager::create([
                'name' => $faker->jobTitle,
                'description' => $faker->paragraph,
                'completed' => $faker->boolean,
            ]);
        }
    }
}
