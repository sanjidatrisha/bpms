@extends('admin.master')

@section('content')

<form action="{{route('service.store')}}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Service Name</label>
    <input type="Text" class="form-control" placeholder="service name" name="name">

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Service Description</label>
    <textarea type="text" class="form-control" placeholder="Service description" name="description"></textarea>

    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Creation Date</label>
      <input type="Date" class="form-control" placeholder="creation date" name="date">

    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Service Price</label>
      <input type="number" class="form-control" placeholder="service price" name="price" />
    </div>
    
    <div class="form-group">
      <label for="">Upload Image: </label>
      <input type="file" class="form-control" name="image">
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
</form>











@endsection