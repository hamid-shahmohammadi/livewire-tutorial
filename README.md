## cmd
```
php artisan livewire:form PostForm
```
## app/Livewire/Tasks/TaskIndex.php
```
public TaskForm $form;
public function save (){
    $this->form->store();       
    $this->dispatch('task-created'); 
}
```
## app/Livewire/Forms/TaskForm.php
```
#[Rule(['required','max:10','string'])]
    public $name=''; 

    public function store (){
        $this->validate();
        Task::create([
            'user_id'=>1,
            'name'=>$this->name
        ]);    
        
    }
```
