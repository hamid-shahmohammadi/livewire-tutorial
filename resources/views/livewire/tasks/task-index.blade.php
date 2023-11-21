<div class="mt-5">
    <div class="text-center pb-10">
        <input class="rounded-md w-1/5 border-0 py-2 text-gray-900 placeholder:text-gray-400 sm:text-sm sm:leading-6"
            type="text" wire:model.blur="name" />
            <span class="absolute -ml-6 mt-2">
                <span x-text="$wire.name.length"></span>
            </span>
        <x-tasks.button :click="'save'" :text="$button" />
        <div class="text-red-500">
            @error('name')
                <span>
                    {{$message}}
                </span>                
            @enderror
        </div>
    </div>
    @foreach ($tasks as $task)
        <x-tasks.task :task="$task" />
    @endforeach
</div>