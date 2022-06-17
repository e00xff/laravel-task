@extends('layout.app')

@section('content')
    <div class="row">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    All Tasks
                </div>
                <div class="card-body p-0">

                    <table class="table mb-0">
                        <thead>
                            <tr>
                                <th scope="col">Title</th>
                                <th scope="col" class="text-center">Completed</th>
                                <th scope="col" class="text-center">Created At</th>
                                <th scope="col" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Text</td>
                                <td class="text-center">...</td>
                                <td class="text-center">...</td>
                                <td class="text-center">
                                    <a href="{{ route('tasks.show', 1) }}" class="btn btn-dark btn-sm">Show</a>
                                    <a href="{{ route('tasks.edit', 1) }}" class="btn btn-dark btn-sm">Edit</a>
                                    <a href="{{ route('tasks.edit', 1) }}" class="btn btn-dark btn-sm">Completed</a>
                                    <a href="" class="btn btn-danger btn-sm" onclick="confirm('Are you sure to delete?')">Delete</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>

        </div>
    </div>
@endsection
