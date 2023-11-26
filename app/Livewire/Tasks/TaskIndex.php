<?php

namespace App\Livewire\Tasks;

use App\Models\Task;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Task Index - iranlaravel')]
class TaskIndex extends Component
{
    public $tasks;

    public function mount (){
        $this->tasks=Task::with('user')->get();
    }

    public function render()
    {
        return view('livewire.tasks.task-index');
    }
}
