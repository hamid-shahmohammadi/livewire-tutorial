<?php

namespace App\Livewire\Tasks;

use App\Livewire\Forms\TaskForm;
use App\Models\Task;
use Livewire\Component;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Illuminate\Support\Facades\Auth;

#[Title('Task Index - iranlaravel')]
class TaskIndex extends Component
{

    public TaskForm $form;

    public function save (){
        $this->form->store();
        $this->dispatch('task-created');
    }
    public function render()
    {
        return view('livewire.tasks.task-index')
        ->with([
            'button'=>'new task'
        ]);
    }


}
