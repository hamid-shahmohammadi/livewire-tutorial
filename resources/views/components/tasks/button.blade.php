<button
    wire:click="{{ $click }}"
    wire:confirm="Are you sure?"
    type="button"
    class="rounded-md bg-pink-600 px-4 py-3 text-sm font-semibold text-white shadow-md hover:bg-pink-500">
    {{ $text }}
</button>

<div wire:loading>
    <x-tasks.spinner />
</div>