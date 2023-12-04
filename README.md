# 10.validation
## /home/shah/sec/livewire/resources/views/livewire/tasks/task-index.blade.php
```
@foreach ($tasks['data'] as $task)
    <x-tasks.task :task="$task" />
@endforeach
<div>
    {{ $this->task_lists->links() }}
</div>
```
## /home/shah/sec/livewire/app/Livewire/Tasks/TaskIndex.php
```
public function mount (){
    $this->tasks = Task::with('user')->paginate(5)->toArray();
}

#[Computed()]
public function task_lists()
{
    return Task::with('user')->paginate(5);
}

```
