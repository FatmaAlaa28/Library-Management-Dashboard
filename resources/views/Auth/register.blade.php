@extends('Layout.master')
@section('content')
<div class="d-flex justify-content-center mt-5" >
    <form action="{{ route('Auth.handelRegister') }}" method="post" class="p-4 border rounded bg-light" style="width: 50%;">
        @csrf
        <div class="mb-3 row">
            <label for="name" class="col-sm-3 col-form-label">Name</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="email" class="col-sm-3 col-form-label">Email</label>
            <div class="col-sm-9">
                <input type="email" class="form-control" id="email" name="email" placeholder="email@example.com">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="password" class="col-sm-3 col-form-label">Password</label>
            <div class="col-sm-9">
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-9 offset-sm-3">
                <input type="submit" class="btn btn-primary w-100">
            </div>
        </div>
    </form>
</div>
@endsection
