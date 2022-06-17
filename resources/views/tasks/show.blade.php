@extends('layout.app')

@section('content')
    <div class="row">
        <div class="col-md-12">

            <div class="card mb-3">
                <div class="card-header">
                    first task
                </div>
                <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto consequatur cumque deleniti eum in inventore nemo optio ut? Ad delectus eaque labore odit reiciendis sed, tempore veniam? Qui, quo, similique.
                </div>
            </div>

            <a href="{{ route('tasks.index') }}" class="btn btn-info btn-sm">Go Back</a>

        </div>
    </div>
@endsection
