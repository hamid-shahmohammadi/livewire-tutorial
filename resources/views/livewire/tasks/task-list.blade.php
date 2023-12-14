<div class="text-center mx-auto">
    <input wire:model.live="search" placeholder="search ..." class="mb-2 rounded"
    @foreach ($this->task_lists as $task)
        <x-tasks.task :task="$task" />
    @endforeach
    <div>
        {{$this->task_lists->links()}}
    </div>
</div>
