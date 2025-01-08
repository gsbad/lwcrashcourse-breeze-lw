<?php

namespace App\Livewire\Tasks;

use App\Livewire\Forms\TaskForm;

use Livewire\Component;

class TasksIndex extends Component
{
    public function render()
    {
        // Renderiza o componente
        return view('livewire.tasks.tasks-index')->layout('layouts.app');
    }
}
