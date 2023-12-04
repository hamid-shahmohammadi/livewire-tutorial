# 9.pagination
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
