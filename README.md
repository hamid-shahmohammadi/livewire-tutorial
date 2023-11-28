## /home/shah/sec/livewire/resources/views/livewire/layout/navigation.blade.php
```
<x-nav-link :href="route('tasks')" :active="request()->routeIs('tasks')" wire:navigate>
                        {{ __('Task') }}
                    </x-nav-link>
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
