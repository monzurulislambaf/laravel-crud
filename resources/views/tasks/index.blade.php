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
                            <td>
                                <a href="{{ route('tasks.edit') }}" method = "POST" class="btn btn-info d-inline">edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
