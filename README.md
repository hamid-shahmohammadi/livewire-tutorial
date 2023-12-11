# 12.search
## resources/views/livewire/tasks/task-list.blade.php
```
<div class="pb-8 mx-auto text-center">  
    <input placeholder="search..." class="mb-2 rounded" wire:model.live="search" /> 
    @foreach ($this->task_lists as $task)
        <x-tasks.task :task="$task" />
    @endforeach
    <div>
        {{$this->task_lists->links()}}
    </div>
</div>
```
## app/Livewire/Tasks/TaskList.php
```
public $search;
 
protected $queryString = ['search'];     


#[On('task-created')]
#[Computed()]
public function task_lists()
{
    return Task::where('name', 'like', '%'.$this->search.'%')
    ->with('user')->latest()->paginate(5);
}
```
