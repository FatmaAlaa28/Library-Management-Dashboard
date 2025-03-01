@extends('Layout.master')
@section('content')
<div class="d-flex justify-content-center align-items-center" style="height: 80vh;">
    <div class="card p-4 shadow" style="width: 60%;">
        <h2 class="text-center">Add Author</h2>
        <form action="{{ route('authors.update') }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row mb-3">
                <div class="col-sm-10">
                    <input hidden type="number" class="form-control" id="id" name="id" value="{{ $author->id }}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="first_name" class="col-sm-2 col-form-label">First Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="first_name" name="first_name" value="{{ $author->first_name }}">
                </div>
            </div>

            <div class="row mb-3">
                <label for="last_name" class="col-sm-2 col-form-label">Last Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="last_name" name="last_name" value="{{ $author->last_name }}">
                </div>
            </div>

            

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection
