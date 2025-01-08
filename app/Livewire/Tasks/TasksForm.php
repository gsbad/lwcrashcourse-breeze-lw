<?php

namespace App\Livewire\Tasks;

use App\Livewire\Forms\TaskForm;
use Livewire\Component;

// Componente para o formulário de tarefas
class TasksForm extends Component
{
    // Propriedade pública para o formulário
    public TaskForm $form;

    // Método save() para salvar a tarefa
    public function save()
    {
        $this->validate();
        $this->form->createTask();
        $this->dispatch('task-created');
        $this->form->reset();
    }

    public function render()
    {
        return view('livewire.tasks.tasks-form');
    }
}
