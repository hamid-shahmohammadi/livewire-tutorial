# 11.lazy

## php artisan make:livewire tasks.TaskList

## resources/views/livewire/tasks/task-index.blade.php
```
<div class="mt-5">
    <div class="text-center pb-10">
        <input class="rounded-md w-1/5 border-0 py-2 text-gray-900 placeholder:text-gray-400 sm:text-sm sm:leading-6"
            type="text" wire:model.blur="name" wire:keydown.enter="save" />
        <span class="absolute -ml-6 mt-2">
            <span x-text="$wire.name.length"></span>
        </span>
        <x-tasks.button :click="'save'" :text="$button" />
        <div class="text-red-500">
            @error('name')
                <span>
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>

    <livewire:tasks.task-list lazy  />  

</div>
```
## /app/Livewire/Tasks/TaskList.php
```
#[On('task-created')]
#[Computed()]
public function task_lists()
{
    return Task::where('name', 'like', '%'.$this->search.'%')
    ->with('user')->latest()->paginate(5);
}
```
## resources/views/livewire/tasks/task-list.blade.php
```
<div class="pb-8">   
    @foreach ($this->task_lists as $task)
        <x-tasks.task :task="$task" />
    @endforeach
    <div>
        {{$this->task_lists->links()}}
    </div>
</div>
```
## app/Livewire/Tasks/TaskIndex.php
```
public function save (){
        $this->validate();
        Task::create([
            'user_id'=>1,
            'name'=>$this->name
        ]);        
        $this->dispatch('task-created'); 
    }
```
