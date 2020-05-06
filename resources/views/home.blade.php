@extends('layouts.app')

@section('content')
  <div class="container text-center">
    <h2>Products</h2>

    <div class="row">

@foreach ($allProducts as $product)

        <div class="col-4">
        <div class="card">
        {{-- <img class="card-img-top" src="//dummyimage.com/286x180/333/aaa" alt="Card image caption"> --}}
        {{-- <img class="card-img-top" src="{{URL::asset('/default-product.jpg')}}" alt="Card image caption"> --}}
        <img class="card-img-top" src="{{URL::asset('/tenor.gif')}}" alt="Card image caption">
        <div class="card-body">
          <h4 class="card-title">{{$product->name}}</h4>
          <p class="card-text">{{$product->description}}</p>
          <h3>$ {{$product->price}}</h3>
        </div>
        <div class="card-body">
          <a href="{{ route('cart.add', $product->id) }}" class="card-link">Add to cart</a>
          {{-- <a href="#" class="card-link">Another link</a> --}}
        </div>
        </div>
      </div>
    @endforeach

    </div>
  </div>
@endsection
