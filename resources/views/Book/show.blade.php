@extends('Layout.master')
@section('content')
<div class="table-responsive mx-auto" style="width: 80%; margin-top: 50px;">
    <table class="table p-3 caption-top table-hover  ">
        <caption class="text-center h2"> List of Books</caption>
        <thead class=" table-dark">
            <th>Id</th>
            <th>Title</th>
            <th>Description</th>
            <th>Price</th>
            <th>Author Name</th>
            <th>Student Name</th>
            <th>Actions</th>
        </thead>
        <tbody>
            <tr>
            @foreach ($books as $book)
        <tr>
            <td>{{ $book->id }}</td>
            <td>{{ $book->title }}</td>
            <td>{{ $book->description }}</td>
            <td>{{ $book->price }}</td>
            <td>{{ $book->author ? $book->author->first_name : 'No Author' }}</td>
            <td>{{$book->student ? $book->student->name:'No Student'}}</td>
            <td>
                <a href="{{ route('books.edit',$book ->id) }}" class="btn btn-primary">Update</a>
                <form action="{{ route('books.destroy', $book->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
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