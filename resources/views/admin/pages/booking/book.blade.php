@extends('admin.master')

@section('content')
<h1>All booking</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Booking Date</th>
      <th scope="col">Booking Time</th>
      <th scope="col">Address</th>
      <th scope="col">Mobile Num</th>
      
    <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($booking as $book)
    <tr>
      <th scope="row">{{$book->id}}</th>
      <td>{{$book->Name}}</td>
      <td>{{$book->Appointment_date}}</td>
      <td>{{$book->Appointment_time}}</td>
      <td>{{$book->Address}}</td>
      <td>{{$book->mobile_num}}</td>
      <td>
        <a class ="btn btn-success" href="{{route('book.view')}}">View</a>
        <a class="btn btn-danger" href="">Delete</a>
        

        
    </td>


    </tr>
    @endforeach
    
  </tbody>
</table>













@endsection