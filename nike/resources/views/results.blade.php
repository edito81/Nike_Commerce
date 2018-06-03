@extends('layouts.frontned')







@section('page')







      <section class="p-5 m-5">
        <div class="container">
 <div class="card-deck">
  <div class="card">
    <img class="card-img-top rounded " src="{{$products->image}}" width="auto" height="auto"  alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title"{{$products->name}}></h5>
      <p class="card-text">Price${{$products->price}}</p>
    </div>
    <div class="card-footer text-center">
      <button class="btn btn-success">Purchase</button>
    </div>
</section>























@endsection