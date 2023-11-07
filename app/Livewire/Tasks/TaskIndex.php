<?php

namespace App\Livewire\Tasks;

use App\Models\Task;
use Livewire\Component;

class TaskIndex extends Component
{
    public $tasks;
    public $name;

    public function mount (){
        $this->tasks = Task::with('user')->get();
    }
    public function render()
    {
        return view('livewire.tasks.task-index')
        ->with([
            'button' => 'new task'
        ]);
    }

    public function save (){
        dd($this->name);
    }
}
