<?php

namespace App\Livewire\Tasks;

use App\Models\Images;
use App\Models\Task;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddTask extends Component
{
    use WithFileUploads;

    #[Rule('required|min:5|max:20')]
    public $todo;
    public $taskId = 0;

    #[Validate(['photos.*' => 'image|max:1024'])]
    public $photos = [];


    public function edit($taskId)
    {
        $task = Task::query()->where('id', $taskId)->firstOrFail();
        $this->todo = $task->name;
        $this->taskId = $taskId;

    }

    public function delete($taskId)
    {
        Task::query()->where('id', $taskId)->delete();
        session()->flash('message', 'Task successfully deleted');

    }

    public function submit()
    {

        $this->validate();


        $task = Task::query()->updateOrCreate(

            [
                'id' => $this->taskId
            ]
            ,
            [
                'user_id' => 1,
                'name' => $this->todo
            ]
        );


        foreach ($this->photos as $photo) {

            $fileName=$photo->getClientOriginalName();
            $photo->storeAs(path: 'public/photos',name:$fileName);


            Images::query()->create([
                'path' => '/storage/photos/'.$fileName,
                'task_id' => $task->id,
            ]);
        }



        session()->flash('message', 'Task successfully created');

        $this->reset();

        //return $this->redirect(route('add-task'));

    }

    public function render()
    {
        $tasks = Task::all();
        return view('livewire.tasks.add-task', [
            'tasks' => $tasks
        ])->layout('layouts.app');
    }
}
