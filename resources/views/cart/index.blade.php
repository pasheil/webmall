@extends('layouts.front')


@section('content')


  {{-- <div class="container-fluid text-center">
  <h2>Your cart</h2>

  <table class="table">
  <thead>
  <tr>
  <th>Name</th>
  <th>Price</th>
  <th>Quantity</th>
  <th>Action</th>
</tr>
</thead>
<tbody>
@foreach ($cartItems as $item)
<tr>
<th scope="row">{{ $item->name }}</th>
<td>


{{Cart::session(auth()->id())->get($item->id)->getPriceSum()}}
</td>
<td>

<form action="{{route('cart.update', $item->id)}}">

<input name="quantity" type="number" value="{{ $item->quantity }}">

<input type="submit" value="save">
</form>
</td>

<td>
<a href="{{ route('cart.destroy', $item->id) }}">Delete</a>
</td>
</tr>
@endforeach
</tbody>
</table>

<h3>Total Price : $ {{\Cart::session(auth()->id())->getTotal()}}</h3>

<a class="btn btn-primary" href="{{ route('cart.checkout') }}" role="button">Proceed to checkout</a>

</div> --}}







<div class="cart-main-area pt-95 pb-100">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h1 class="cart-heading">Cart</h1>
        <div class="table-content table-responsive">
          <table>
            <thead>
              <tr>
                <th>remove</th>
                <th>images</th>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($cartItems as $item)
                <tr>
                  <td class="product-remove"><a href="{{ route('cart.destroy', $item->id) }}"><i class="pe-7s-close"></i></a></td>
                  <td class="product-thumbnail">
                    {{-- <a href="#"><img src="assets/img/cart/1.jpg" alt=""></a> --}}

                    {{-- {{dd($item->associatedModel)}}; --}}
                    @if(!empty($item->associatedModel->cover_img))
                      <a href="{{route('products.show', $item->associatedModel)}}">
                        <img src="{{asset('storage/'.$item->associatedModel->cover_img)}}" alt="">
                      </a>
                    @else
                      <a href="{{route('products.show', $item->associatedModel)}}">
                        <img src="assets/img/cart/1.jpg" alt="">
                      </a>
                    @endif

                  </td>
                  <td class="product-name"><a href="#">{{ $item->name }}</a></td>
                  <td class="product-price-cart"><span class="amount">${{ $item->price }}</span></td>
                  <td class="product-quantity">
                    <form action="{{route('cart.update', $item->id)}}">
                      <input name="quantity" value="{{ $item->quantity }}" type="number">
                      <input class="button" type="submit" value="save">
                    </form>
                  </td>
                  <td class="product-subtotal">$ {{\Cart::session(auth()->id())->get($item->id)->getPriceSum()}}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="coupon-all">
              <div class="coupon">
                <form action="{{route('cart.coupon')}}" method="GET">
                  <input id="coupon_code" class="input-text" name="coupon_code" value="" placeholder="Coupon code" type="text">
                  <input class="button" name="apply_coupon" value="Apply coupon" type="submit">
                </form>
              </div>

            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-5 ml-auto">
            <div class="cart-page-total">
              <h2>Cart totals</h2>
              <ul>
                <li>Subtotal<span>{{\Cart::session(auth()->id())->getSubTotal()}}</span></li>
                <li>Total<span>{{\Cart::session(auth()->id())->getTotal()}}</span></li>
              </ul>
              <a href="{{route('cart.checkout')}}">Proceed to checkout</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
