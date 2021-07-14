@extends('layouts.main')

@section('content')
<div class="container">
  
  <div class="row">
    <div class="col-md-6">
    
   <h1>Edit post</h1> 
  
  
  </div> </div> </div>


<div class="container">
    <div class="row">
        <div class="col-md-6">

      <form action="{{url('cvs/'.$cv->id)}}"  method="post">
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
    
 

      <div class="form-group">
          <label for="title">title</label>
          <input type="text"  name="title"  class="form-control" placeholder="entré titre" value="{{$cv->titre}}">
      </div>

      <div class="form-group">
        <label for="presentation" >presentation</label> <br>
        <textarea name="presentation" id="" cols="30" rows="10"  >{{$cv->presentation}}</textarea>
    </div>


    <div class="form-group">
        <button class="btn btn-primary  ">Updtae</button>
    </div>
      </form>

        </div>


    </div>


</div>
    
@endsection