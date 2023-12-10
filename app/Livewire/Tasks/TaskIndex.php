<?php

namespace App\Livewire\Tasks;

use App\Models\Task;
use Livewire\Component;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Illuminate\Support\Facades\Auth;

#[Title('Task Index - iranlaravel')]
class TaskIndex extends Component
{



    #[Rule(['required','max:10','min:3','string'])]
    public $name='';

    public function render()
    {
        return view('livewire.tasks.task-index')
        ->with([
            'button'=>'new task'
        ]);
    }

    public function save (){
        $this->validate();
        Task::create([
            'user_id'=>Auth::id(),
            'name'=>$this->name
        ]);
        $this->dispatch('task-created');
    }
}
