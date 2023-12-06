<header id="header" class=" d-flex align-items-center mb-5">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">BPMS </a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{route('home')}}" class="active">Home</a></li>

          <li class="dropdown"><a href="{{route('About')}}"><span>About</span> <i class="bi bi-chevron-down"></i></a>
            
              </li>
            </ul>
          </li>
          <ul>
          <li><a href="{{route('Services')}}">Services</a></li>
          @auth
          <li><a href="{{route('book.now')}}">Book Now</a></li>
          @endauth
          @auth
          <li><a href="{{route('profile.view')}}">Customer Profile</a></li>
          @endauth

          <li><a href="{{route('contact')}}">Contact</a></li>
          
         
          </ul>
         
         

          <ul>

          @guest
          <li><a href="{{route('customer.login')}}">Login</a></li>
         <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Register</button>
@endguest
@auth
                <a href="{{route('customer.logout')}}">Logout</a>
                @endauth
          </ul>

          


         
        
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>

  <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Customer Registration</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{route('customer.store')}}" method="post">
          @csrf
     
        <div class="form-group">
        <label for="name">Name:</label>
        <input name="name" type="text" class="form-control" id="name" placeholder="Enter your name">
      
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

    </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
      </div>


      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger">Submit</button>
      </div>
      
    </form>
 
      </div>
    </div>
  </div>
</div>