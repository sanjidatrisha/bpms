@extends('admin.master')

@section('content')

<h1>Customer List</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Mobile Number</th>
      <th scope="col">Address</th>
      
      <th scope="col">Registration</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach($customer as $customer)
    <tr>
      <th scope="row">{{$customer->id}}</th>
      <td>{{$customer->Name}}</td>
      <td>{{$customer->mobile_num}}</td>
      <td>{{$customer->Address}}</td>

    <td>{{$customer->Appointment_date}}</td>
      <td>
        <a class ="btn btn-success" href="">Assign Service</a>
        <a class="btn btn-danger" href="">Delete</a>
        

        
    </td>
    
      
      <td></td>
    </tr>
    @endforeach
   


    
  </tbody>
</table>






















@endsection