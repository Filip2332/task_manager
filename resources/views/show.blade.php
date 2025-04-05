<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Details</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h3>Task Details</h3>
        </div>
        <div class="card-body">
            <h5 class="card-title">Task Name:</h5>
            <p class="card-text">{{ $task->name }}</p>

            <h5 class="card-title">Description:</h5>
            <p class="card-text">{{ $task->description }}</p>

            <h5 class="card-title">Status:</h5>
            <p class="card-text">
                @if($task->completed)
                    <span class="badge badge-success">Completed</span>
                @else
                    <span class="badge badge-warning">Not Completed</span>
                @endif
            </p>

            <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
</div>
</body>
</html>
