<div>
    <h1 class="text-center mb-4">Add Task</h1>
    <div class="row">
        <div class="col-md-8 offset-md-2">
            @if(session()->has('message'))
                <div class="alert alert-success">{{session('message')}}</div>
            @endif

            <form wire:submit="submit">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="New Task" style="height: 50px"
                           wire:model="todo">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-success">

                            <span wire:loading.remove>Submit</span>
                            <div wire:loading class="loader"></div>

                        </button>

                    </div>


                </div>

                @error('todo')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <div class="input-group mb-3">
                    <div
                        x-data="{ uploading: false, progress: 0 }"
                        x-on:livewire-upload-start="uploading = true"
                        x-on:livewire-upload-finish="uploading = false"
                        x-on:livewire-upload-cancel="uploading = false"
                        x-on:livewire-upload-error="uploading = false"
                        x-on:livewire-upload-progress="progress = $event.detail.progress"
                    >
                        <!-- File Input -->
                        <input type="file" wire:model="photos" multiple>

                        <!-- Progress Bar -->
                        <div x-show="uploading">
                            <progress max="100" x-bind:value="progress"></progress>
                        </div>
                    </div>
                </div>
                @error('photos')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror

                @if ($photos)
                    <div class="d-flex">
                        @foreach($photos as $photo)
                            <div>
                                <img src="{{ $photo->temporaryUrl() }}" class="w-100">
                            </div>
                        @endforeach
                    </div>
                @endif
            </form>


            <ul class="list-group">
                @foreach($tasks as $task)
                    <li class="list-group-item todo-item">
                       <div>
                           <img src="{{@$task->images[0]->path}}" width="200" alt="">
                       </div>
                        <span>{{$task->name}}</span>
                        <div>
                            <button class="btn btn-sm btn-warning mr-2"
                                    wire:click="edit({{$task->id}})"
                            >Edit
                            </button>
                            <button class="btn btn-sm btn-danger"
                                    wire:confirm="Are you sure?"
                                    wire:click="delete({{$task->id}})"
                            >Delete
                            </button>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
