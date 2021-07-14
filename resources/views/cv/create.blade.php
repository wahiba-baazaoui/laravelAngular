@extends('layouts.main')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-3">

      <form action="{{url('cvs')}}"  method="post">
      @csrf


      <div class="form-group">
          <label for="title">title</label>
          <input type="text"  name="title"  class="form-control" placeholder="entré titre">
      </div>

      <div class="form-group">
        <label for="presentation" >presentation</label> <br>
        <textarea name="presentation" id="" cols="30" rows="10"></textarea>
    </div>


    <div class="form-group">
        <button class="btn btn-primary  ">create</button>
    </div>
      </form>

        </div>


    </div>


</div>
    
@endsection