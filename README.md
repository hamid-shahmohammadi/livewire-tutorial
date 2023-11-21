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
