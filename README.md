## /home/shah/sec/livewire/resources/views/livewire/layout/navigation.blade.php
```
<x-nav-link :href="route('tasks')" :active="request()->routeIs('tasks')" wire:navigate>
                        {{ __('Task') }}
                    </x-nav-link>
```
## /home/shah/sec/livewire/resources/views/components/tasks/button.blade.php
```
<button
    wire:click="{{ $click }}"
    wire:confirm="Are you sure?"
```
