@extends('admin.master')


@section('content')
<h1>Beautician</h1>
<a href= "{{route('beautician.create')}}"type="button" class="btn btn-success">Success</a>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Beautician Name</th>
      <th scope="col">Beautician Speciality</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($beauticians as $key=>$beautician)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$beautician->name}}</td>
      <td>{{$beautician->speciality}}</td>

      <td>{{$beautician->status}}</td>
      <td>
        <a class ="btn btn-success" href="">Edit</a>
        <a class="btn btn-danger" href="">Delete</a>

        
    </td>
    </tr>
    @endforeach
    
  </tbody>
</table>










@endsection
