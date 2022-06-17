@extends('layout.app')

@section('content')
    <div class="row">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    All Tasks
                </div>
                <div class="card-body p-0">

                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th scope="col">Title</th>
                                <th scope="col" class="text-center">Completed</th>
                                <th scope="col" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($tasks as $task)
                            <tr>
                                <td>{{ $task->title }}</td>
                                <td class="text-center">{{ $task->completed }}</td>
                                <td class="text-center">
                                    <a href="{{ route('tasks.show', $task->id) }}" class="btn btn-dark btn-sm"><i class="fa-solid fa-eye"></i></a>
                                    <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-dark btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="{{ route('tasks.destroy', $task->id) }}" class="btn btn-dark btn-sm"><i class="fa-solid fa-check"></i></a>
                                    <a href="" class="btn btn-danger btn-sm" onclick="confirm('Are you sure to delete?')"><i class="fa-solid fa-xmark"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>

        </div>
    </div>
@endsection
