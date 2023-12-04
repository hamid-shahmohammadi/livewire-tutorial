# 9.event
## /home/shah/sec/livewire/resources/views/livewire/tasks/task-index.blade.php
```
#[On('task-created')]
public function task_event (){
    dd('event');
}
public function save (){
        $this->validate();
        Task::create([
            'user_id'=>1,
            'name'=>$this->name
        ]);        
        $this->dispatch('task-created'); 
    }
```
## /home/shah/sec/livewire/resources/views/components/tasks/button.blade.php
```
<button
    wire:click="$dispatch('task-created')"
    {{-- @click="$wire.dispatch('task-created')"     --}}
    type="button"
    class="rounded-md bg-blue-600 px-4 py-3 text-sm font-semibold text-white shadow-md hover:bg-blue-500">
    {{ $text }}
</button>
```
