@extends ('layouts.app')
@section('content')

<div class="container">

<h1>Create New Category</h1>

    <form action="/iti/categories/store" method="post" enctype="multipart/form-data" style="width:60% ; margin:auto ; margin-top:40px ; background:#fff; padding:30px">
    @csrf
    <div class="row mb-5">
        <label for="inputName3" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
        <input name="name" type="text" class="form-control" id="inputEmail3">
        </div>
    </div>

    <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">logo</label>
        <div class="col-sm-10">
        <input name="logo" type="file" class="form-control" id="inputEmail3">
        </div>
    </div>


>
    <button type="submit" class="btn btn-primary "
    style="display:block; width:30% ; margin:auto; margin-top:40px ">Create</button>
   
    </form>
</div>



@endsection