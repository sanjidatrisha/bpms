@extends('frontend.master')
@section('content')

<div class="container w-25 mt-5 my-5">
  <form class="my-3" action="{{route('customer.do.login')}}" method="post">
    @csrf


    <div class="form-group mb-2">
      <label for="exampleInputEmail1">Email address</label>
      <input required name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input required name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>


    <button type="submit" class="btn btn-primary mt-2 mx-auto text-center">Login</button>
  </form>
</div>

@endsection
