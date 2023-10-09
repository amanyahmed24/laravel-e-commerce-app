@extends ('layouts.app')
@section('content')


<div class="container">


<form action="" method="post" style="width:60% ; margin:auto ; margin-top:40px ; background:#fff; padding:30px">

<div class="row mb-5">
    <label for="inputName3" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3">
    </div>
  </div>

  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3">
    </div>
  </div>

  <div class="row mb-3">
    <label class="col-sm-2 col-form-label">Your message</label>
      <div class="col-sm-10">
        <textarea name="message"  cols="60" rows="10"></textarea>
      </div>
  </div>
 

  <a href="{{'/iti/products/'}}">
  <button type="submit" class="btn btn-primary "
  style="display:block; width:30% ; margin:auto; margin-top:40px ">Send</button>
  </a>
</form>
</div>

@endsection 