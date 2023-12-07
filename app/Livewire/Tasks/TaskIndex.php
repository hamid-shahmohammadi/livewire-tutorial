<?php

namespace App\Livewire\Tasks;

use App\Models\Task;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\WithPagination;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Livewire\Attributes\Computed;
use Illuminate\Support\Facades\Auth;

#[Title('Task Index - iranlaravel')]
class TaskIndex extends Component
{
    use WithPagination;

    public $tasks;

    #[Rule(['required','max:10','min:3','string'])]
    public $name='';


    public function mount (){
      
    }

    #[On('task-created')]
    public function task_event ($title){
        dd($title);
    }

    #[Computed]
    public function task_lists (){
        return Task::with('user')->paginate(4);
    }

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
