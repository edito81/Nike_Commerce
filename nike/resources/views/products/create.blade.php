@extends('layouts.app')








@section('content')


@if(count($errors))>0)

<ul class="list-group">

    @foreach($errors->all() as $error)

<li class="list-group-item text-danger">


{{$error}}

</ul>

@endforeach



@endif

<h2 class="text-center">

<div class="panel panel-default">

    <div class="panel-heading">
        Create a new Item 


        </div>
        <div class="panel-body">

        <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
             
             {{ csrf_field() }}
<div class="form-group">

    <label for="title">Name</label>
    <input type="text" name="name" class="form-control">

</div>

<div class="form-group">

    <label for="image">Featured image</label>
    <input type="file" name="image" class="form-control">

</div>




<div class="form-group">

    <label for="title">Price</label>
    <input type="text" name="price" class="form-control">

</div>





<div class="form-group">

    <label for="content">Description</label>
    <textarea name="description" id="content" cols="5" rows="5" class="form-control"></textarea>

</div>

<div class="form-group">

    <div class="text-center">

        <button class="btn btn-success" type="submit">


Store Item
</button>







        </form>

        </div>


    </div>








@stop
