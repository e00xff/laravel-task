@extends('layout.app')

@section('content')
    <div class="row">
        <div class="col-md-12">

            <div class="card mb-3">
                <div class="card-header">
                    Edit Task
                </div>
                <div class="card-body">
                    <form action="#" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="title" class="form-label">Task Name</label>
                            <input type="text" class="form-control" id="title" name="title" value="">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Task Description</label>
                            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary btn-sm">Update task</button>
                    </form>
                </div>
            </div>

            <a href="{{ route('tasks.index') }}" class="btn btn-info btn-sm">Go Back</a>

        </div>
    </div>
@endsection
