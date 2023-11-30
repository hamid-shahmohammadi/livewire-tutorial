<div class="mt-8 mx-8">
    <div>

        <a wire:navigate href="{{route('tasks.index')}}" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">
            Back
        </a>
    </div>
    <h1 class="font-bold tracking-tight sm:text-6xl text-center">{{$task->name}}</h1>
</div>
