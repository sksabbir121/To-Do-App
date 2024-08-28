@extends('layouts.main')
@push('head')
  <title> Update Todo</title>

@endpush


@section('main-section')

<div>
    <div class="d-flex justify-content-center align-items-center my-5">
        <div class="h2">Update Todo</div>
        <a href="" class="btn btn-primary">Back</a>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{ route("todo.update") }}" method="POST">
                @csrf
                <label for="" class="form-label mt-4">Name</label>
                <input type="text" name="name" class="form-control" value="{{ $todo->name }}">
                <label for="" class="form-label mt-4">Work</label>
                <input type="text" name="work" class="form-control" name="work" value="{{ $todo->work }}">
                <label for="" class="form-label mt-4">Due Date</label>
                <input type="text" name="dueDate" class="form-control" name="dueDate" value="{{ $todo->dueDate }}">
                <input type="number" name="id" value="{{ $todo->dueDate }}" hidden>
                <button type="submit" class="btn btn-primary mt-4">updateTodo  </button>
            </form>
        </div>

    </div>
</div>

@endsection