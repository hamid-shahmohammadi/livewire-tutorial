<div class="pb-8 mx-auto text-center">  
    <input placeholder="search..." class="mb-2 rounded" wire:model.live="search" /> 
    @foreach ($this->task_lists as $task)
        <x-tasks.task :task="$task" />
    @endforeach
    <div>
        {{$this->task_lists->links()}}
    </div>
</div>
