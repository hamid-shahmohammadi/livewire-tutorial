## php artisan livewire:make Tasks/TaskShow
## web.php
```
Route::get('tasks/{id},TaskShow::class)->name('tasks.show');
```
## /home/shah/sec/livewire/app/Livewire/Tasks/TaskShow.php
```
public Task $task;

public function mount (Task $task){
    $this->task=$task;
}
```
