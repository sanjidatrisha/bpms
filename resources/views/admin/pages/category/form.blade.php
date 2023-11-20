@extends('admin.master')

@section('content')

<form action="{{route('category.store')}}" method="post">
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Category Name</label>
    <input type="Text" class="form-control" name="name">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Category Description</label>
    <input type="Text" class="form-control" name="description">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>









@endsection