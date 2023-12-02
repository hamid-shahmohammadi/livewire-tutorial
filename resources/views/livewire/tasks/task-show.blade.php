<div class="mt-8 mx-8">
    <div>
        <a wire:navigate class="text-white bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" href="{{route('tasks')}}">Back</a>
    </div>
    <h1 class="font-bold tracking-tight text-white sm:text-6xl text-center">
            {{$task->name}}
    </h1>
</div>
