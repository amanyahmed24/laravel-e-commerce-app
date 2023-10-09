@extends ('layouts.app')
@section('content')

<div class="container">
    <h1>All categories</h1>
    <table class="table p-3 "border>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Logo</th>
                <th>Show</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>

        <tbody>
        @foreach ($categories as $category )
        <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->name}}</td>
            <td><img style="width:60px" src="{{asset('imgs/'.$category->logo) }}" 
            alt="Category Logo"></td>
            <td><a href="{{ route('category.show' , $category->id )}}"><button class="btn btn-primary">Show</button></a></td>
            <td><a href="{{ route('category.edit' , $category->id )}}"><button class="btn btn-warning">Edit</button></a></td>
            <td><a href="{{ route('category.destroy' ,  $category->id )}}"><button class="btn btn-danger">Delete</button></a></td>
        </tr>
@endforeach
        </tbody>

<a href="{{ route('category.create')}}"><button class="btn btn-success my-5" >Add New Category</button>
</a>
</table>
@endsection 
