<?php

namespace App\Livewire\Tasks;

use App\Models\Task;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\WithPagination;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Livewire\Attributes\Computed;

#[Title('Tasks -iranlaravel')]
class TaskIndex extends Component
{
    use WithPagination;
    
    public $tasks;

    #[Rule(['required','max:10','string'])]
    public $name='';

    #[On('task-created')]
    public function mount (){
        $this->tasks = Task::with('user')->paginate(5)->toArray();
    }

    #[Computed()]
    public function task_lists()
    {
        return Task::with('user')->paginate(5);
    }

    
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
        // return $this->redirect(route('tasks'));
        $this->dispatch('task-created'); 
    }
}
