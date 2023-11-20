@extends('admin.master')

@section('content')


<form action="{{route('beautician.store')}}" method="post">
@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Beautician Name</label>
    <input type="Text" class="form-control" placeholder="Enter name" name="name">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Beautician Description</label>
    <input type="Text" class="form-control"  placeholder="Enter description"name="description">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Beautician Speciality</label>
    <input type="Text" class="form-control"  placeholder="Enter speciality"name="speciality">
  </div>


  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>






@endsection