<!DOCTYPE html>
  <html lang="en-US">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <title>Practo|Booking Details</title>
      <link rel = "icon" href =  
        "https://pbs.twimg.com/profile_images/849341342224351238/cuaVqp5x_400x400.jpg"
        type="image/x-icon">
      <style>
          body{
            background-color:#161748;
          }
          #logo {
            position:relative;
                  left:20px;
                  width:100px;
          }
          #top{
            margin-top:100px;
          }
          .size{
            width:100px;
          }
          #img3,#img4{
            width:50px;
          }
          #footer{
          background: #f6f6f9;
          }
      </style>
    </head>
    <body>
      <header class="bg-dark h-20 container-fluid">
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
          <!-- Brand -->
          <a class="navbar-brand" href="home"><img class="img-fluid" id="logo" src="https://i2.wp.com/www.cosmoderma.healios.co.in/wp-content/uploads/2019/04/practo.png" alt="practo logo"></a>
        
          <!-- Toggler/collapsibe Button -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
        
          <!-- Navbar links -->
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav text-center ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="booking_page">Back</a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <section class="bg-warning">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 my-3">
            <div class="card card-body bg-secondary">
              <div class="card-title text-center text-white">
                <h2 class="text-capitalize">patient details</h2>
                <p>Fill the details below</p>
              </div>
              <form action="submit1" method="POST">
              @csrf
                <div class="form-group mt-3">
                  <label for="name" class="text-white">Name</label>
                  <input type="text" class="form-control" placeholder="Enter Name" name="name" id="name">
                  @error('name')
                  <div class="text-warning">{{$message}}</div>
                  @enderror
                </div>
                <div class="form-group mt-3">
                  <label for="age" class="text-white">Age(in Years)</label>
                  <input type="number" class="form-control" placeholder="Enter Age" name="age" id="age" min="1" max="120">
                  @error('age')
                  <div class="text-warning">{{$message}}</div>
                  @enderror
                </div>
                <p class="text-white">Gender</p>
                <div class="form-check">
                  <label class="form-check-label" for="radio1">
                    <input type="radio" class="form-check-input" id="radio1" name="gender" value="male">Male
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label" for="radio2">
                    <input type="radio" class="form-check-input" id="radio2" name="gender" value="female">Female
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label" for="radio3">
                    <input type="radio" class="form-check-input" id="radio3" name="gender" value="other">Other
                  </label>
                  @error('gender')
                  <div class="text-warning">{{$message}}</div>
                  @enderror
                </div>
                <div class="form-group mt-3">
                  <label for="mobile" class="text-white">Mobile</label>
                  <input type="tel" class="form-control" placeholder="Enter Mobile Number" name="mobile" id="mobile">
                  @error('mobile')
                  <div class="text-warning">{{$message}}</div>
                  @enderror
                </div>
                <div class="form-group mt-3">
                  <label for="email" class="text-white">Email</label>
                  <input type="email" class="form-control" placeholder="Enter Email" name="email" id="email">
                  @error('email')
                  <div class="text-warning">{{$message}}</div>
                  @enderror
                </div>
                <!--<div class="text-center">
                    <button class="btn bg-dark text-white" type="submit">Submit</button>
                </div>
              </form>-->
            </div>
          </div>
          <div class="col-md-6 my-3">
            <div class="card card-body bg-secondary">
              <div class="card-title text-center text-white">
                <h2>Appointment and Delivery Details</h2>
                <p>Fill the details below</p>
              </div>
                <div class="form-group mt-3">
                  <label class="text-white" for="booking_date">Select a Date</label> 
                  <input type="date" id="booking_date" class="form-control" name="booking_date">
                  @error('booking_date')
                  <div class="text-warning">{{$message}}</div>
                  @enderror
                </div>
                <div class="form-group mt-3">
                  <label for="time-slot" class="text-white">Pick a time-slot</label>
                  <select class="form-control" id="time-slot" name="time_slot">
                    <option value="">None</option>
                    <option value="9:00-12:00">9:00-12:00</option>
                    <option value="13:00-16:00">13:00-16:00</option>
                    <option value="17:00-20:00">17:00-20:00</option>
                  </select>
                  @error('time_slot')
                  <div class="text-warning">{{$message}}</div>
                  @enderror
                </div>
                <div class="form-group mt-3">
                  <label for="address" class="text-white">Address</label>
                  <textarea class="form-control" id="address" placeholder="Enter Address" name="address" rows="4"></textarea>
                  @error('address')
                  <div class="text-warning">{{$message}}</div>
                  @enderror
                </div>
                <div class="form-group mt-4">
                  <label for="pin-code" class="text-white">Pin-code</label>
                  <input class="form-control" id="pin-code" placeholder="Enter Pin-code" name="pin_code">
                  @error('pin_code')
                  <div class="text-warning">{{$message}}</div>
                  @enderror
                </div>
            </div>
          </div>
        </div>
        <div class="text-center"><button class="text-warning bg-dark text-center btn btn-lg btn-outline-info" type="submit">Submit</button></div>
        </form>
        </div>
      </div>
      </section>
      <footer id="footer">
        <br/>
        <div>
          <h4 class="text-center">We do great</h4>
        </div>
        <div class="container text-center">
          <div class="row">
              <div class="col-4 img-fluid">
                <img src="https://www.practo.com/tests/public/icons/dogreat/user.png?1563954988" alt="project">
                <p class="mt-2">15 Million users every month</p>
              </div>
              <div class="col-4 img-fluid">
                <img src="https://www.practo.com/tests/public/icons/dogreat/briefcase.png?1563954997" alt="project">
                <p class="mt-2">Trusted by 2,00,000 healthcare professionals</p>
              </div>
              <div class="col-4 img-fluid">
                <img id="img3" src="https://www.practo.com/tests/public/icons/dogreat/location.png?1563955004" alt="project">
                <p class="mt-2">We serve in 40+ cities</p>
              </div>
          </div>
        </div>
        <br/>
      </footer>
      @if(session('message')){
        <script>
        swal({
            title: "Good job!",
            text: "Data saved successfully!",
            icon: "success",
        });
        </script>
      }
      @endif
    </body>
    </html>
