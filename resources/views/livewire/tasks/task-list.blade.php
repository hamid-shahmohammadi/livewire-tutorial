<div class="pb-8">  
 
    @foreach ($this->task_lists as $task)
        <x-tasks.task :task="$task" />
    @endforeach
    <div>
        {{$this->task_lists->links()}}
    </div>
</div>
