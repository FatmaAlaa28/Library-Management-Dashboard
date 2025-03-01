@extends('Layout.master')
@section('content')
<div class="table-responsive mx-auto" style="width: 60%; margin-top: 50px;">
    <table class="table p-3 caption-top table-hover  ">
        <caption class="text-center h2"> List of Categories</caption>
        <thead class=" table-dark">
            <th>Id</th>
            <th>Name</th>
        </thead>
        <tbody>
            <tr >
            @foreach($categories as $category)
                <td >{{ $category->id }}</td>
                <td >{{ $category->name }}</td>
            @endforeach
            </tr>
        </tbody>
    </table>
</div>
@endsection