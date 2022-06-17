@extends('layout.app')

@section('content')
    <div class="row">
        <div class="col-md-12">

            <div class="card mb-3">
                <div class="card-header">
                    {{ $task->title }}
                </div>
                <div class="card-body">
                    {!! $task->description !!}
                </div>
            </div>

            <a href="{{ route('tasks.index') }}" class="btn btn-info btn-sm">Go Back</a>

        </div>
    </div>
@endsection
