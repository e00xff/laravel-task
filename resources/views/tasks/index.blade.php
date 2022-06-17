@extends('layout.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-12 col-sm-12">

            <div class="card">
                <div class="card-header">
                    All Tasks
                </div>
                <div class="card-body p-0">

                    <table class="table table-hover mb-0">
                        @if(count($tasks) > 0)
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">Title</th>
                                <th scope="col" class="text-center">Action</th>
                            </tr>
                        </thead>
                        @endif
                        <tbody>
                        @forelse($tasks as $task)
                            <tr>
                                <td>
                                    @if($task->completed)
                                        <a href="tasks/{{ $task->id }}/uncompleted" class="text-primary">
                                            <i class="fa-solid fa-square"></i>
                                        </a>
                                    @else
                                        <a href="tasks/{{ $task->id }}/completed" class="text-success">
                                            <i class="fa-solid fa-square-check"></i>
                                        </a>
                                    @endif
                                </td>
                                <td>
                                    @if($task->completed)
                                        <span class="text-decoration-line-through">{{ $task->title }}</span>
                                    @else
                                        {{ $task->title }}
                                    @endif
                                </td>
                                <td class="text-center">

                                    <a href="{{ route('tasks.show', $task->id) }}" class="btn btn-dark btn-xs"><i class="fa-solid fa-eye"></i></a>
                                    <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-dark btn-xs"><i class="fa-solid fa-pen-to-square"></i></a>

                                    <form action="{{route('tasks.destroy', $task->id)}}" method="post" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-xs" onclick="return confirm('Are you sure to delete?')">
                                            <i class="fa-solid fa-xmark"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3">
                                    Task(s) not found.
                                </td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>

                </div>
            </div>

        </div>
    </div>
@endsection
