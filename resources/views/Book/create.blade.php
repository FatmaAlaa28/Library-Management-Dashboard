@extends('Layout.master')
@section('content')
<div class="d-flex justify-content-center align-items-center" style="height: 80vh;">
    <div class="card p-4 shadow" style="width: 60%;">
        <h2 class="text-center">Add Book</h2>
        <form action="{{ route('books.store') }}" method="POST">
            @csrf
            <div class="row mb-3">
                <label for="title" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="title" name="title">
                </div>
            </div>

            <div class="row mb-3">
                <label for="description" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                </div>
            </div>

            <div class="row mb-3">
                <label for="price" class="col-sm-2 col-form-label">Price</label>
                <div class="col-sm-10">
                    <input type="number" step="0.01" class="form-control" id="price" name="price">
                </div>
            </div>

            <div class="row mb-3">
                <label for="author_id" class="col-sm-2 col-form-label">Author ID</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="author_id" name="author_id">
                </div>
            </div>

            <div class="row mb-3">
                <label for="student_id" class="col-sm-2 col-form-label">Student ID</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="student_id" name="student_id">
                </div>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection
