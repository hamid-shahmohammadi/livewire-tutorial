## task
```
make:model Task -m
make:seeder UserSeeder TaskSeeder
```
Task migration
```
public function up(): void
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
            ->constrained('users')
            ->cascadeOnDelete();
            $table->string('name');
            $table->timestamps();
        });
    }

```
# TaskSeeder
```
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
```
# UserSeedet
```
public function run(): void
    {
        User::insert([
            [
                'name'=>'Admin',
                'email'=>'admin@admin.com',
                'password'=>Hash::make('password')
            ],
            [
                'name'=>'User',
                'email'=>'user@user.com',
                'password'=>Hash::make('password')
            ],
        ]);
    }
```
# livewire:publish --config
