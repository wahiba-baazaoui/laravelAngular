@extends('layouts.main')

@section('content')

<div class="container">

    <div class="row">
        <div class="col-md-12">
    
     <h1>List of cv</h1>
     <div class="pull-right">
         <a href="cvs/create"  class="btn btn-info">New cv</a>
         </div>  
     <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Title</th>
            <th scope="col">Presentation</th>
            <th scope="col">Created_at</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
         





    @foreach ($cv  as $item)

   

          <tr>
            <th scope="row">{{$item->id}}</th>
            <td> {{$item->titre}}</td>
            <td>{{$item->presentation}}</td>
            <td>{{$item->created_at}}</td>
            

            <td> 
               
                <a href=""  class="btn btn-primary">Details</a> 
                <a href="{{url('cvs/'.$item->id.'/edit')}}"  class="btn btn-success">Edit</a> 
                  
                <form   action="{{url('cvs/'.$item->id)}}" method="post">
                    <input type="hidden" name="_method" value="delete">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button class="btn btn-danger">Delete</button>
                </form>
                     
               
                
            </td>
          </tr>
          
          
              
          @endforeach
          
        </tbody>
      </table>
        </div>
    </div>

</div>


@endsection