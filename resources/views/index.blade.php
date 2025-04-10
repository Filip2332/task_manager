<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task List</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">Task List</h1>
    <a href="{{ route('tasks.create') }}" class="btn btn-primary mb-3">Add a new task</a>

    @if($tasks->isEmpty())
        <div class="alert alert-warning">No tasks</div>
    @else
        <div class="list-group">
            @foreach($tasks as $task)
                <div class="list-group-item">
                    <h5 class="mb-1">{{ $task->name }}</h5>
                    <p class="mb-1">Description: {{ $task->description }}</p>
                    <small>Status: {{ $task->completed ? 'Completed' : 'Not completed' }}</small>
                    <div class="mt-2">
                        <a href="{{ route('tasks.show', $task->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-sm btn-secondary">Edit</a>
                        <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

