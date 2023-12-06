@extends('admin.master')
@section('content')

<h1>Service</h1>
<a href= "{{route('service.create')}}"type="button" class="btn btn-success">Creat New Service</a>


<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Service Name</th>
      <th scope="col">Service Description</th>
      <th scope="col">Creation Date</th>
      <th scope="col">Service Price</th>
      <th scope="col">Image</th>
    
      
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach($services as $service)
    <tr>
      <td scope="row">{{$service->id}}</td>
      <td>{{$service->service_name}}</td>
       <td>{{$service->service_description}}</td>
      <td>{{$service->creation_date}}</td>
      <td>{{$service->price}}</td>
      <td>
        <img width="20%" src="{{url('uploads/',$service->image)}}" alt="">
      </td>
      <td>
        <a class ="btn btn-success" href="{{route('service.edit',$service->id)}}">Edit</a>
        <a class ="btn btn-danger" href="{{route('service.delete',$service->id)}}">Delete</a>

      </td>
      
    </tr>
    @endforeach
   







  </tbody>
</table>
{{ $services->links() }}




@endsection