<?php

use App\Livewire\Tasks\AddTask;
use App\Livewire\Tasks\ShowTask;
use App\Livewire\Tasks\TaskList;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/add-task', AddTask::class)->name('add-task');
Route::get('/show-task/{task}', ShowTask::class);
Route::get('/list-task', TaskList::class);
