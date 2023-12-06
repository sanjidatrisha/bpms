@extends('admin.master')
@section('content')

<form action="{{route('service.update',$service->id)}}" method="post" enctype="multipart/form-data">
  @csrf
  @method('put')
  <div class="form-group">
    <label for="exampleInputEmail1">Service Name</label>
    <input type="Text" class="form-control" placeholder="service name" name="name" value="{{$service->service_name}}">

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Service Description</label>
    <textarea type="text" class="form-control" placeholder="Service description" name="description" value="{{$service->service_description}}"></textarea>
    
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Creation Date</label>
      <input type="Date" class="form-control" placeholder="creation date" name="date" value="{{$service->creation_date}}">

    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Service Price</label>
      <input type="number" class="form-control" placeholder="service price" name="price" value="{{$service->price}}" />
    </div>
    
    <div class="form-group">
      <label for="">Upload Image: </label>
      <input type="file" class="form-control" name="image" value="image">
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
</form>



























@endsection