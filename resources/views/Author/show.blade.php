@extends('Layout.master')
@section('content')
<div class="table-responsive mx-auto" style="width: 80%; margin-top: 50px;">
    <table class="table p-3 caption-top table-hover  ">
        <caption class="text-center h2"> Author Details</caption>
        <thead class=" table-dark">
            <th>Id</th>
            <th>First Name</th>
            <th>Last Name</th>
           <th>Actions</th>
        </thead>
        <tbody>
            
                @foreach($authors as $author)
                <tr>
                    <td>{{ $author->id }}</td>
                    <td>{{ $author->first_name }}</td>
                    <td>{{ $author->last_name }}</td>
                    <td>
                    <a href="{{ route('authors.edit', $author->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('authors.destroy', $author->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>
</div>
@endsection


