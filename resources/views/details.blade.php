@extends ('layouts.app')

@section('content')
<div class="container">
<div class='card col-md-4' style='width: 25rem;'>  

<img src="{{ asset('/assets/imgs/'.$product->img) }}" class="card-img-top" alt="img...">
<div class='card-body'>
    <h5 class='card-title'>{{ $product['name'] }}</h5>
    <p  class=''>Price :  {{ $product['price'] }}</p>
    <p  class=''>category :  {{ $product->category->name}}</p>
</div>
</div>
</div>

@endsection 