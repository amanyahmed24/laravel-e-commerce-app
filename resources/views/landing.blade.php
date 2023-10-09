@extends('layouts.app')

@section('content')

<!-- //card  -->
<div class="container">
    <h1 class="m-auto my-3"> All Products here </h1>
    <div class="row gap-4">

    <a href="{{ route('product.create')}}"><button class="btn btn-success" >Add New Product</button>
</a>
        @foreach($products as $product)
            <div class='card col-md-4' style='width: 18rem;'>  
                <img src="{{ asset('/assets/imgs/'.$product->img) }}" class='card-img-top' alt='img...'>
                <div class='card-body'>
                    <h5 class='card-title'>{{ $product['name'] }}</h5>
                    <a href="{{ route('product.showDetails',$product->id) }}" class='btn btn-primary'>Show</a>
                    <a href="{{ route('product.destroy' , $product->id )}}"><button class="btn btn-danger my-3">Delete</button></a>
                    <a href="{{ route('product.update' ,  $product->id )}}"><button class="btn btn-success my-5" >Edit</button></a>
                </div>
            </div>
            
        @endforeach


    </div>

</div>
@endsection


