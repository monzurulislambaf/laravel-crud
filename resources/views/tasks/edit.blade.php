@extends('layouts.app')
@section('content')
    <div>
        <form action="{{ route('tasks.update', $task->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Title</label>
                <input type="text" name="title" value="{{ $task->title }}" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Description</label>
                <textarea name="description" id="" class="form-control">{{ $task->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">update</button>
        </form>
    </div>
@endsection
