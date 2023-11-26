<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
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
                'user_id'=>User::factory()->create()->id,
                'name'=>'task 1'
            ],
            [
                'user_id'=>User::factory()->create()->id,
                'name'=>'task 2'
            ],
        ]);
    }
}
