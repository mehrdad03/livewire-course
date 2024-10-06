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
        $tasks = [
            [
                'name' => 'task-1',
                'user_id' => 1,
            ], [
                'name' => 'task-2',
                'user_id' => 1,
            ],
        ];


        foreach ($tasks as $task) {
            Task::query()->create($task);
        }
    }

}
