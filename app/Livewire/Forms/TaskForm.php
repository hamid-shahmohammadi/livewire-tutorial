<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use App\Models\Task;
use Livewire\Attributes\Rule;

class TaskForm extends Form
{
    #[Rule(['required','max:10','string'])]
    public $name=''; 

    public function store (){
        $this->validate();
        Task::create([
            'user_id'=>1,
            'name'=>$this->name
        ]);    
        
    }
}
