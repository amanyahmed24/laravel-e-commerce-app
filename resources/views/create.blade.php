@extends ('layouts.app')
@section('content')

<div class="container">

    <form action="{{route('product.store')}}" method="post" style="width:60% ; margin:auto ; margin-top:40px ; background:#fff; padding:30px">
    @csrf
    <div class="row mb-5">
        <label for="inputName3" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
        <input name="name" type="text" class="form-control" id="inputEmail3">
        </div>
    </div>

    <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">price</label>
        <div class="col-sm-10">
        <input name="price" type="number" class="form-control" id="inputEmail3">
        </div>
    </div>

    <div class="row mb-3">
        <label class="col-sm-2 col-form-label">img name</label>
        <input name="img" type="text" class="form-control" >
    </div>

    <div class="row mb-3">
        <label class="col-sm-2 col-form-label">category id</label>
        <input name="category_id" type="text" class="form-control" >
    </div>
    

>
    <button type="submit" class="btn btn-primary "
    style="display:block; width:30% ; margin:auto; margin-top:40px ">Create</button>
   
    </form>
</div>



@endsection