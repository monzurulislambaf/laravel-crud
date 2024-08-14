@extends('layouts.app')
@section('content')
    <div class="mt-4">
        <div>
            <a href="{{ route('tasks.create') }}" class="btn btn-primary">create</a>

        </div>
        <div class="mt-2">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tasks as $task)
                        <tr>
                            <td class="table-primary">{{ $task->id }}</td>
                            <td class="table-secondary">{{ $task->title }}</td>
                            <td class="table-dark">{{ $task->description }}</td>
                            <td class="table-danger">
                                <a href="{{ route('tasks.edit', $task->id) }}" method = "POST"
                                    class="btn btn-info d-inline">edit</a>
                                <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
