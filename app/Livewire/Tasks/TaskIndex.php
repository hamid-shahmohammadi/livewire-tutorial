<?php

namespace App\Livewire\Tasks;

use App\Models\Task;
use Livewire\Component;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;


#[Title('Tasks -iranlaravel')]
class TaskIndex extends Component
{
    
    
    public $tasks;

    #[Rule(['required','max:10','string'])]
    public $name='';

    
    // public function mount (){
    //     $this->tasks = Task::with('user')->paginate(5)->toArray();
    // }

    // #[Computed()]
    // public function task_lists()
    // {
    //     return Task::with('user')->paginate(5);
    // }

    // #[On('task-created')]
    // public function task_event ($title){
    //     dd($title);
    // }

    
    public function render()
    {
        
        return view('livewire.tasks.task-index')
        ->with([
            'button' => 'new task'
        ]);
    }

    public function save (){
        $this->validate();
        Task::create([
            'user_id'=>1,
            'name'=>$this->name
        ]);        
        $this->dispatch('task-created'); 
    }
}
