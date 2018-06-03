

@extends('layouts.frontend')
















@section('page')

      <section class="p-5 m-5">
        <div class="container">
 <div class="card-deck">
  <div class="card">
    <img class="card-img-top rounded " src="{{$kidsproduct->image}}" width="640px" height="640px" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title"{{$kidsproduct->name}}></h5>
      <p class="card-text">Price${{$kidsproduct->price}}</p>
    </div>
    <div class="card-footer text-center">
      <button class="btn btn-success">Purchase</button>
    </div>
</section>



   <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="pk_test_fL6LdfY8dcLAwwSEgNDdcpEJ"
    data-amount=""
    data-name="Demo Site"
    data-description="Example charge"
    data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
    data-locale="auto"
    data-currency="gbp">

  </script>

    @endsection