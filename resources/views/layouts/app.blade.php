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
        /* HTML: <div class="loader"></div> */
        .loader {
            width: 30px;
            aspect-ratio: 1;
            border-radius: 50%;
            border: 8px solid lightblue;
            border-right-color: orange;
            animation: l2 1s infinite linear;
        }
        @keyframes l2 {to{transform: rotate(1turn)}}



    </style>
</head>
<body>
<div class="container mt-5">
    {{$slot}}

</div>
</body>
</html>
