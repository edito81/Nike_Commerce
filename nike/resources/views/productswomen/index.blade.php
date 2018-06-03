@extends('layouts.app')
@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            Published Posts
        </div>
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                <th>Name</th>

                <th>Image</th>

                  <th>Price</th>
                     <th>Description</th>

                <th>Edit</th>

                <th>Trash</th>

                </thead>

                <tbody>
                    @foreach($women as $womens)
               
                        <tr>
                            <td>
                                {{$womens->name}}
                            </td>
                            <td>
                                 <img src="{{$womens->image}}" width="150px" height="150px">
                            </td>
                            <td>
                                ${{$womens->price}}
                            </td>
                            <td>
                                {{$womens->description}}
                            </td>
                            <td>
                                <a href="" class="btn btn-xs btn-info">Edit</a>
                            </td>
                            <td>
                         
                                <a href="{{route('womenproducts.destroy',['id' => $womens->id])}}"
                                   class="btn btn-xs btn-danger">Delete</a>
                                   
                               

                            </td>
                        </tr>
             @endforeach
                    <tr>
                        <th colspan="5" class="text-center">No published Posts</th>
                    </tr>
               
                </tbody>
            </table>
        </div>
    </div>

@endsection