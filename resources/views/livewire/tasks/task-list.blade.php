<div>
    <h1 class="text-center mb-4">List of Tasks</h1>
    <div class="row">

        <div class="col-md-8 offset-md-2">
            <ul class="list-group">
                @foreach($tasks as $task)
                    <li class="list-group-item todo-item">
                        <span>{{$task->name}}</span>
                        <div>
                            <button class="btn btn-sm btn-warning mr-2">Edit</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

</div>
