<?php

namespace App\Livewire\Tasks;

use App\Models\Task;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\WithPagination;
use Livewire\Attributes\Computed;


class TaskList extends Component
{
    use WithPagination;

    public $search;
 
    protected $queryString = ['search'];     


    #[On('task-created')]
    #[Computed()]
    public function task_lists()
    {
        return Task::where('name', 'like', '%'.$this->search.'%')
        ->with('user')->latest()->paginate(5);
    }

    public function placeholder()
    {
        return view('components.skeleton');
    }
    

    
    public function render()
    {       
        
        return view('livewire.tasks.task-list');
    }
   
}
