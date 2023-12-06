@extends('admin.master')
@section('content')
<h1>Category</h1>


<a href= "{{route('category.create')}}"type="button" class="btn btn-success">Success</a>
<table class="table table-striped ">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Category</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($categories as $category)
    <tr>
      <td scope="row">{{$category->id}}</td>
      <td>{{$category->category_name}}</td>
      <td>{{$category->status}}</td>
      <td>
        <a class ="btn btn-success" href="">Edit</a>
        <a class ="btn btn-danger" href="">Delete</a>
      </td>
    </tr>
    @endforeach
    
  </tbody>
</table>
{{ $categories->links() }}




@endsection