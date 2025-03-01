@extends('Layout.master')
@section('content')
<div class="table-responsive mx-auto" style="width: 80%; margin-top: 60px;">
    <table class="table p-3 caption-top table-hover ">
        <caption class="text-center h2"> List of Students</caption>
        <thead class=" table-dark">
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Age</th>
            <th colspan="2">Actions</th>
        </thead>
        <tbody>
            <tr>
                
               @foreach ($students as $student)
               <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->phone }}</td>
                <td>{{ $student->age }}</td>
                <td><a  class="btn btn-primary" href="{{ route('students.edit',$student->id) }}">Update</a>
                <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="d-inline">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                </td>
            </tr>
                @endforeach
            </tr>
        </tbody>
    </table>
</div>
@endsection