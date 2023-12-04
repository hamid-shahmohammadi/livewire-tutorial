# 9.pagination
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
