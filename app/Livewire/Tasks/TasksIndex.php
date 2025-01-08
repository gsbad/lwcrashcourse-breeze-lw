<?php

namespace App\Livewire\Tasks;

use App\Livewire\Forms\TaskForm;

use Livewire\Component;

class TasksIndex extends Component
{
    public function render()
    {
        return view('livewire.tasks.tasks-index', [
            'tasks' => auth()->user()->tasks()->latest()->get()
        ])->layout('layouts.app');
    }
}
