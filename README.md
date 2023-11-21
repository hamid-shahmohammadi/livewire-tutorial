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
