@extends('Layout.master')
@section('content')
<div class="table-responsive mx-auto" style="width: 80%; margin-top: 50px;">
    <table class="table p-3 caption-top table-hover  ">
        <caption class="text-center h2"> Category of Books </caption>
        <thead class=" table-dark">
            <th>Book Name</th>
            <th>Category</th>
        </thead>
        <tbody>
            @foreach($lst as $bookCategory)
            <tr>
                <td>{{ $bookCategory}}</td>
                <td>{{ $bookCategory->name }}</td>
            </tr>
                @endforeach
        </tbody>
    </table>
</div>
@endsection