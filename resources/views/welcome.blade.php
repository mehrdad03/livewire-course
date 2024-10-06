<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do App</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #343a40;
            color: #fff;
        }

        .todo-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0.5rem;
            border: 1px solid #495057;
            margin-bottom: 0.5rem;
            border-radius: 0.25rem;
            background-color: #495057;
        }


    </style>
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center mb-4">To-Do List</h1>
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="New Task">
                <div class="input-group-append">
                    <button type="button" class="btn btn-success">Success</button>
                </div>
            </div>
            <ul class="list-group">
                <li class="list-group-item todo-item">
                    <span>First Task</span>
                    <div>
                        <button class="btn btn-sm btn-warning mr-2">Edit</button>
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </div>
                </li>
                <li class="list-group-item todo-item">
                    <span>Second Task</span>
                    <div>
                        <button class="btn btn-sm btn-warning mr-2">Edit</button>
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </div>
                </li>
                <li class="list-group-item todo-item">
                    <span>Third Task</span>
                    <div>
                        <button class="btn btn-sm btn-warning mr-2">Edit</button>
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
</body>
</html>
