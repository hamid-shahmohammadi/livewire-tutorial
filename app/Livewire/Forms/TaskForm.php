<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use App\Models\Task;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

class TaskForm extends Form
{
    #[Rule(['required','max:10','min:3','string'])]
    public $name='';

    public function store(){
        $this->validate();
        Task::create([
            'user_id'=>Auth::id(),
            'name'=>$this->name
        ]);
    }
}
