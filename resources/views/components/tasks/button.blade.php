<button type="button" wire:click="{{$click}}"
wire:confirm="Are you sure?"
class="rounded-md bg-pink-600 px-4 py-3 text-sm font-semibold text-white shadow-md hover:bg-pink-500"
>
{{$text}}
</button>
<button type="button"
wire:click="$dispatch('task-created',{title:'Task event 2'})"
{{-- @click="$wire.dispatch('task-created',{title:'Task event 1'})" --}}
class="rounded-md bg-blue-600 px-4 py-3 text-sm font-semibold text-white shadow-md hover:bg-blue-500"
>
event
</button>
<div wire:loading>
    <x-spinner />
</div>
