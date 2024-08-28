@extends('layouts.main')
@push('head')
  <title> Todo List App</title>

@endpush


@section('main-section')

<div>
    <div class="d-flex justify-content-center align-items-center my-5">
        <div class="h2">Create Todo</div>
        <a href="{{ route('todo.create') }}" class="btn btn-primary">Add Todos</a>
    </div>

    <table class="table	table-striped table-dark">
        <tr>
            <th>Name</th>
            <th>work</th>
            <th>Due Date</th> 
            <th>Action</th>
        </tr>

        @foreach ($todos as $todo)
        <tr valign='middle'>
            <td>{{ $todo->name }}</td>
            <td>{{ $todo->work }}</td>
            <td>{{ $todo->dueDate }}</td>
            <td>
                <a href="{{ route("todo.update", $todo->id) }}" class="btn btn-success btn-sm">Update</a>
                <a href="{{ route("todo.delete", $todo->id) }}" class="btn btn-danger btn-sm">Delete</a>
            </td>
        </tr>
        @endforeach

    </table>
</div>

@endsection