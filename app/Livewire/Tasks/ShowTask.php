<?php

namespace App\Livewire\Tasks;

use App\Models\Task;
use Livewire\Component;

class ShowTask extends Component
{
    public $task;

    public function mount(Task $task)
    {
        $this->task = $task;
    }

    public function render()
    {
        return view('livewire.tasks.show-task')->layout('layouts.app');
    }
}
