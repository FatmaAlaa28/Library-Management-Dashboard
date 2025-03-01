@extends('Layout.master')
@section('content')
<div class="d-flex justify-content-center align-items-center" style="height: 80vh;">
    <div class="card p-4 shadow" style="width: 60%;">
        <h2 class="text-center">Add Book</h2>
        <form action="{{ route('bookcategories.store') }}" method="POST">
            @csrf
            
            <div class="row mb-3">
                <label for="book_id" class="col-sm-2 col-form-label">Book ID</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="book_id" name="book_id">
                </div>
            </div>

            <div class="row mb-3">
                <label for="category_id" class="col-sm-2 col-form-label">Category ID</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="category_id" name="category_id">
                </div>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection
