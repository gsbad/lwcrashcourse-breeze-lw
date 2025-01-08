<?php

namespace App\Livewire\Tasks;

use Livewire\Component;

class TasksIndex extends Component
{
    public $name;
    public $slug;
    public $description;
    public $status;
    public $priority;
    public $deadline;

    public function save()
    {
        $user = auth()->user();

        $user->tasks()->create($this->only([
            'name',
            'slug',
            'description',
            'status',
            'priority',
            'deadline',
        ]));

        $this->reset();
    }

    public function render()
    {
        return view('livewire.tasks.tasks-index')->layout('layouts.app');
    }
}
