@extends ('layouts.app')
@section('content')

<div class="container">

<h1>Create New Category</h1>

    <form action="{{route('category.update' , $category->id)}}" method="post" style="width:60% ; margin:auto ; margin-top:40px ; background:#fff; padding:30px">
    @csrf
    <div class="row mb-5">
        <label for="inputName3" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
        <input name="name" type="text" class="form-control" id="inputEmail3"
        value="{{$category->name}}">
        </div>
    </div>

    <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">logo</label>
        <div class="col-sm-10">
        <input name="price" type="file" class="form-control" id="inputEmail3"
        value="{{$category->logo}}">
        </div>
    </div>


    <button type="submit" class="btn btn-primary "
    style="display:block; width:30% ; margin:auto; margin-top:40px ">Save</button>
   
    </form>
</div>
        
</div>

@endsection