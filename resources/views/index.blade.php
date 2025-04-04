<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Zadataka</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">Lista Zadataka</h1>
    <a href="{{ route('tasks.create') }}" class="btn btn-primary mb-3">Dodaj Novi Zadatak</a>

    @if($tasks->isEmpty())
        <div class="alert alert-warning">Nema dostupnih zadataka.</div>
    @else
        <div class="list-group">
            @foreach($tasks as $task)
                <div class="list-group-item">
                    <h5 class="mb-1">{{ $task->name }}</h5>
                    <p class="mb-1">Opis: {{ $task->description }}</p>
                    <small>Status: {{ $task->completed ? 'Završeno' : 'Nije završeno' }}</small>
                    <div class="mt-2">
                        <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-sm btn-secondary">Uredi</a>
                        <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Obriši</button>
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

