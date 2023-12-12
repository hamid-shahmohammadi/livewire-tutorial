<div class="mt-5">
    <div class="text-center pb-10">
        <input class="rounded-md w-1/5 border-0 py-2 text-gray-900 placeholder:text-gray-400 sm:text-sm sm:leading-6"
            type="text" wire:model.blur="form.name" wire:keydown.enter="save" />
        <span class="absolute -ml-6 mt-2">
            <span x-text="$wire.form.name.length"></span>
        </span>
        <x-tasks.button :click="'save'" :text="$button" />
        <div class="text-red-500">
            @error('name')
                <span>
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>

    <livewire:tasks.task-list lazy  />  

</div>
