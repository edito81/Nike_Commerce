@extends('layouts.frontend')









@section('page')
 <!-- Carousel -->
        <section class="p-5 m-5">
        <div class="container">
 <div class="card-deck">
  <div class="card">
    <img class="card-img-top rounded " src="{{$first_post->image}}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">{{$first_post->name}}</h5>
      <p class="card-text">Price ${{$first_post->price}}</p>
    </div>
    <div class="card-footer text-center">
      <a  href="{{route('checkout',['id'=>$first_post->id])}}">
      <button class="btn btn-success">Purchase</button>
    </a>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="{{$second_post->image}}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">{{$second_post->name}}</h5>
      <p class="card-text">Price${{$second_post->price}}</p>
    </div>
    <div class="card-footer text-center">
      <a href="{{route('checkout',['id'=>$second_post->id])}}">
      <button class="btn btn-success">Purchase</button>
    </a>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top rounded" src="{{$third_post->image}}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">{{$third_post->name}}</h5>
      <p class="card-text">Price${{$third_post->price}}</p>
    </div>
    <div class="card-footer text-center">
      <a  href="{{route('checkout',['id'=>$third_post->id])}}">
      <button class="btn btn-success">Purchase</button>
    </a>
    </div>
  </div>
</div>
    <div class="card-deck pt-5 ">
  <div class="card">
    <img class="card-img-top rounded" src="{{$four_post->image}}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">{{$four_post->title}}</h5>
      <p class="card-text">$Price{{$four_post->price}}</p>
    </div>
    <div class="card-footer text-center">
      <a href="{{route('checkout',['id'=>$four_post->id])}}">
      <button class="btn btn-success">Purchase</button>
    </a>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top rounded" src="{{$five_post->image}}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">{{$five_post->name}}</h5>
      <p class="card-text">Price${{$five_post->price}}</p>
    </div>
    <div class="card-footer text-center">
      <a href="{{route('checkout',['id'=>$five_post->id])}}">
      <button class="btn btn-success">Purchase</button>
    </a>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top rounded" src="{{$six_post->image}}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title"></h5>
      <p class="card-text">Price$</p>
    </div>
    <div class="card-footer text-center">
      <a href="{{route('checkout',['id'=>$six_post->id])}}">
      <button class="btn btn-success">Purchase</button>
    </a>
    </div>
  </div>
</div>
      
      
       
        </div>
        </section>



        @endsection