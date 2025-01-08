<?php

namespace App\Livewire\Tasks;

use App\Livewire\Forms\TaskForm;
use Livewire\Component;

class TasksForm extends Component
{
    public TaskForm $form;

    public function save()
    {
        $this->validate();
        $this->form->createTask();
        $this->form->reset();
    }

    public $tasks;

    public function mount($tasks)
    {
        $this->tasks = $tasks;
    }

    public function render()
    {
        return view('livewire.tasks.tasks-form');
    }
}
