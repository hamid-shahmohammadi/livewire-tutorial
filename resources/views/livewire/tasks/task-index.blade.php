<div>
    @foreach ($tasks as $task)
        <x-tasks.task :task="$task" />
    @endforeach
</div>
