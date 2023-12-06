@extends('frontend.master')

@section('content')


  <form action="{{route('store.book')}}" method="post" class="p-5">
    @csrf
    <div class="map-content-9 mt-lg-0 mt-4" >
      
        <div class="form-group" >
          <label for="exampleInputEmail1">Name</label>
          <input type="Text" class="form-control" placeholder="Enter name" name="name">

        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Address</label>
          <input type="Text" class="form-control" placeholder="Enter name" name="address">

        </div>
        <div class="form-group" >
          <label for="exampleInputEmail1">Mobile number</label>
          <input type="number" class="form-control" placeholder="Enter num" name="mobile_number">

        </div>


        <div style="padding-top: 30px;">
          <label>Appointment Date</label>

          <input type="date" class="form-control appointment_date" placeholder="Date" name="date" id='adate' required="true">
        </div>
        <div style="padding-top: 30px;" >
          <label>Appointment Time</label>

          <input type="time" class="form-control appointment_time" placeholder="Time" name="time" id='atime' required="true">
        </div>

        <div style="padding-top: 30px;" >
          <textarea class="form-control" id="message" name="message" placeholder="Message" required=""></textarea>
        </div>
        <div  ><button type="submit" class="btn btn-success">Book Now</button></div>
        
      </form>










  </form>








</body>

</html>

















@endsection