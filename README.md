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
## /home/shah/sec/livewire/resources/views/components/icons/eye.blade.php
```
<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
  </svg>
```
## /home/shah/sec/livewire/resources/views/components/tasks/task.blade.php
```
<p class="mt-2 text-md md:ml-6 md:mt-0">
    <a href="{{route('tasks.show',$task)}}" class="whitespace-nowrap font-medium text-pink-700 hover:text-pink-600 pr-2">
        <x-icons.eye />
    </a>
```
## /home/shah/sec/livewire/resources/views/livewire/layout/navigation.blade.php
```
<div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
        {{ __('Dashboard') }}
    </x-nav-link>
    <x-nav-link :href="route('tasks')" :active="request()->routeIs('tasks')" wire:navigate>
        {{ __('Task') }}
    </x-nav-link>
</div>
```
## /home/shah/sec/livewire/resources/views/livewire/tasks/task-show.blade.php
```
<div>
    <h1 class="font-bold tracking-tight text-white sm:text-6xl text-center">
            {{$task->name}}
    </h1>
</div>

```
## /home/shah/sec/livewire/resources/views/livewire/tasks/task-show.blade.php
```
<div class="mt-8 mx-8">
    <div>
        <a class="text-white bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" href="{{route('tasks')}}">Back</a>
    </div>
    <h1 class="font-bold tracking-tight text-white sm:text-6xl text-center">
            {{$task->name}}
    </h1>
</div>

```
