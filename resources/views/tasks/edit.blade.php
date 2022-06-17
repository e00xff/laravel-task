@extends('layout.app')

@section('content')
    <div class="row">
        <div class="col-md-12">

            <div class="card mb-3">
                <div class="card-header">
                    Edit Task
                </div>
                <div class="card-body">
                    <form action="{{ route('tasks.update', $task->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="title" class="form-label">Task Name</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ $task->title }}">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Task Description</label>
                            <textarea class="form-control" id="description" name="description" rows="3">{{ $task->description }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Update task</button>
                    </form>
                </div>
            </div>

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <a href="{{ route('tasks.index') }}" class="btn btn-info btn-sm">Go Back</a>

        </div>
    </div>
@endsection
