# 10.pagination
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
## php artisan livewire:publish --pagination
## /home/shah/sec/livewire/resources/views/vendor/livewire/tailwind.blade.php
```
<div class="flex-p hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                <div class="mb-2">
                    <p class="text-sm text-gray-700 leading-5">
                        <span>{!! __('Showing') !!}</span>
                        <span class="font-medium">{{ $paginator->firstItem() }}</span>
                        <span>{!! __('to') !!}</span>
                        <span class="font-medium">{{ $paginator->lastItem() }}</span>
                        <span>{!! __('of') !!}</span>
                        <span class="font-medium">{{ $paginator->total() }}</span>
                        <span>{!! __('results') !!}</span>
                    </p>
                </div>


```
## /home/shah/sec/livewire/resources/css/app.css
```
.flex-p{
    display: flex;
	flex-direction: column;
	flex-wrap: nowrap;
	justify-content: center;
	align-items: center;
	align-content: center;
}
```
