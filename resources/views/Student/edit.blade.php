@extends('Layout.master')
@section('content')
<div class="d-flex justify-content-center align-items-center" style="height: 60vh;">
    <div class="card p-4 shadow" style="width: 50%;">
        <h2 class="text-center">Update Student</h2>
        <form action="{{ route('students.update') }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row mb-3">
                <div class="col-sm-10">
                    <input hidden type="number" class="form-control" id="id" name="id" value="{{ $student->id }}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" value="{{ $student-> name }}">
                </div>
            </div>

            <div class="row mb-3">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email" value="{{ $student-> email }}">
                </div>
            </div>

            <div class="row mb-3">
                <label for="phone" class="col-sm-2 col-form-label">Phone</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="phone" name="phone" value="{{ $student-> phone }}">
                </div>
            </div>

            <div class="row mb-3">
                <label for="age" class="col-sm-2 col-form-label">Age</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="age" name="age" value="{{ $student->age }}">
                </div>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</div>
@endsection
