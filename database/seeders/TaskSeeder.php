<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Task::insert([
            [
                'user_id' => 1,
                'name' => 'task 1'
            ],
            [
                'user_id' => 1,
                'name' => 'task 2'
            ],
        ]);
    }
}
