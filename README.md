## /home/shah/sec/livewire/resources/views/livewire/layout/navigation.blade.php
```
<x-nav-link :href="route('tasks')" :active="request()->routeIs('tasks')" wire:navigate>
                        {{ __('Task') }}
                    </x-nav-link>
```
## /home/shah/sec/livewire/resources/views/livewire/tasks/task-show.blade.php
```
<div>
        <a wire:navigate class="text-white bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" href="{{route('tasks')}}">Back</a>
    </div>
```
## /home/shah/sec/livewire/resources/views/components/tasks/task.blade.php
```
 <p class="mt-2 text-md md:ml-6 md:mt-0">
      <a wire:navigate href="{{route('tasks.show',$task)}}" class="whitespace-nowrap font-medium text-pink-700 hover:text-pink-600 pr-2">
                    <x-icons.eye />
      </a>
```
## /home/shah/sec/livewire/resources/views/components/tasks/button.blade.php
```
<button
    wire:click="{{ $click }}"
    wire:confirm="Are you sure?"
```
## /home/shah/sec/livewire/resources/views/livewire/tasks/task-index.blade.php
```
 <input class="rounded-md w-1/5 border-0 py-2 text-gray-900 placeholder:text-gray-400 sm:text-sm sm:leading-6"
            type="text" wire:model.blur="name"
             wire:keydown.enter="save" />

wire:keyup.0="save"
```
