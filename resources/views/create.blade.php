@extends('layouts.main')
@push('head')
  <title> Add Todo</title>

@endpush


@section('main-section')

<div>
    <div class="d-flex justify-content-center align-items-center my-5">
        <div class="h2">Add Todo</div>
        <a href="{{ route("todo.home") }}" class="btn btn-primary">Back</a>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{ route("todo.store") }}" method="POST">
                @csrf
                <label for="" class="form-label mt-4">Name</label>
                <input type="text" class="form-control" name="name">
                <div class="text-danger">
                    @error('name')
                        {{ $message }}
                    @enderror  
                </div>
                <label for="" class="form-label mt-4">Work</label>
                <input type="text" class="form-control" name="work">
                <div class="text-danger">
                    @error('work')
                        {{ $message }}
                    @enderror  
                </div>
                <label for="" class="form-label mt-4">Due Date</label>
                <input type="date" class="form-control" name="due_date">
                <div class="text-danger">
                    @error('dueDate')
                        {{ $message }}
                    @enderror  
                </div>
                <button type="submit" class="btn btn-primary mt-5">Add Todo</button>
            </form>
        </div>

    </div>
</div>

@endsection