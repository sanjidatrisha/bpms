@extends('admin.master')


@section('content')
<form action="{{route('beautician.update',$beautician->id)}}" method="post">
@csrf
@method('put')
  <div class="form-group">
    <label for="exampleInputEmail1">Beautician Name</label>
    <input type="Text" class="form-control" placeholder="Enter name" name="name" value="{{ $beautician->name }}">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Beautician Description</label>
    <input type="Text" class="form-control"  placeholder="Enter description"name="description" value="{{ $beautician->description }}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Beautician Speciality</label>
    <input type="Text" class="form-control"  placeholder="Enter speciality"name="speciality" value="{{$beautician->speciality}}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Contact Num</label>
    <input type="number" class="form-control"  placeholder="Enter number"name="contact_num" value="{{ $beautician-> contact_num }}">
  </div>

  
 <button type="submit" class="btn btn-success" >Submit</button>
</form>
















@endsection