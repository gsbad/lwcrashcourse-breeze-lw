<?php

namespace App\Livewire;

use Livewire\Component;

class Tasks extends Component
{
    public $tasks = [];
    public $task = '';

    //public function mount()
    //{
    //    $this->tasks = ['Primeira Task', 'Segunda Task', 'Terceira Task'];
    //}

    public function add()
    {
        $this->tasks[] = $this->task;
        $this->task = '';
    }

    public function render()
    {
        return view('livewire.tasks');
    }
}
