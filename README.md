## php artisan livewire:make tasks.TaskCreate
## task-create.blade.php
```
<div>
Task Create
</div>
```
## web.php
```
Route::middleware(['auth'])->group(function () {
   
    Route::get('tasks/create',TaskCreate::class);
  
});  
```
## /config/livewire.php
```
'layout' => 'layouts.app',
```
## /home/shah/sec/livewire/resources/views/layouts/app.blade.php
```
<main>
   @isset($slot)
    {{ $slot }}
    @endisset
</main>
```
## /home/shah/sec/livewire/app/Livewire/Tasks/TaskCreate.php
```
<?php

namespace App\Livewire\Tasks;

use Livewire\Attributes\Layout;
use Livewire\Component;

class TaskCreate extends Component
{
    #[Layout('layout.app')]
    public function render()
    {
        return view('livewire.tasks.task-create');
    }
}
```
## php artisan livewire:make tasks.TaskIndex
## /home/shah/sec/livewire/resources/views/livewire/tasks/task-index.blade.php
```
taskindex
```
## /home/shah/sec/livewire/app/Livewire/Tasks/TaskIndex.php
```
->layout('app.layout')
```
## /home/shah/sec/livewire/app/Livewire/Tasks/TaskIndex.php
```
#[Title('Tasks -iranlaravel')]
class TaskIndex extends Component
{
 public function render()
    {
        return view('livewire.tasks.task-create')->title('Tasks -iranlaravel');
    }  
```
## /home/shah/sec/livewire/resources/views/layouts/app.blade.php
```
<title>
{{ $title ?? 'iranlaravel livewire' }}
</title>
```
