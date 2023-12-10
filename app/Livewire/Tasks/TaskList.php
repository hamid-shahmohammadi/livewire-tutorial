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

    #[On('task-created')]
    #[Computed]
    public function task_lists (){
        return Task::with('user')->latest()->paginate(4);
    }

    public function render()
    {
        return view('livewire.tasks.task-list');
    }
}
