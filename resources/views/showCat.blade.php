@extends ('layouts.app')

@section('content')
<div class="container">
<div class='card col-md-4' style='width: 25rem;'>  

    <img src="{{asset('imgs/'.$category->logo) }}" alt="Category Logo">
    <div class='card-body'>
        <h5 class='card-title'>category ID : {{ $category->id }}</h5>
        <p  class=''>category Name :  {{ $category->name }}</p>
    </div>
</div>

<h1 class="text-primary my-3"> Products in this Category </h1>

    <ol>
        @foreach($category->products as $pro)
            <li> <a href="{{route('product.showDetails', $pro->id)}}"> {{$pro->name}}</a></li>

        @endforeach

    </ol>
    <a href="{{route('category.index')}}"><button class="btn btn-primary my-3">Back To All CAtegories</button>
</a>
</div>

@endsection 