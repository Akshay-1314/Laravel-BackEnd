<!DOCTYPE html>
  <html lang="en-US">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
      <script src="https://kit.fontawesome.com/258f31346d.js" crossorigin="anonymous"></script>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <title>Practo</title>
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
          #diagnostic{
            background-image: url('data:image/jpeg;base64,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');
            background-size: 100vw 100px;
            background-repeat:no-repeat;
            background-color:#90ee90;
            box-sizing:border-box;
            text-align:center;
            border:2px solid black;
            height:100px;
            padding-right:110px;
            padding-top:10px;
          }
          #diagnostic a{
            text-decoration:none;
          }
          footer div{
            text-align:justify;
          }
          footer nav a{
            text-decoration:none;
          }
          footer nav a:hover{
            background-color:#00008b;
            text-decoration:none;
          }
          .carousel-item img{
            height:300px;
            width:100vw;
            
          }
          #about{
            text-align:center;
          }
      </style>
    </head>
    <body>
      <header class="bg-dark h-20 container-fluid">
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
          <!-- Brand -->
          <a class="navbar-brand" href=""><img class="img-fluid" id="logo" src="https://i2.wp.com/www.cosmoderma.healios.co.in/wp-content/uploads/2019/04/practo.png" alt="practo logo"></a>
        
          <!-- Toggler/collapsibe Button -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
        
          <!-- Navbar links -->
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav text-center ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="booking_list">Booking List</a>
              </li>
              @if(session('details'))
              <li class="nav-item">
                <a class="nav-link" id="login" href="logout">logout</a>
              </li>
              
              @else
              <li class="nav-item">
                <a class="nav-link" id="logout" href="admin">Admin Login</a>
              </li>
              @endif
            </ul>
          </div>
        </nav>
      </header>
      @if(session('alogged')){
        <div class="alert alert-info alert-dismissible fade show text-center" role="alert">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
          Already logged in as admin
        </div>
      }
      @endif
      <div class="container-fluid" id="diagnostic">
        <a href="booking_page" class="btn btn-secondary btn-outline-dark text-white">
        BOOK A DIAGNOSTIC TEST</a>
      </div>
      <!--<section class="mt-5">
          <div class="container">-->
              <div class="row mb-5">
                  <div class="col-5 bg-secondary mt-4 mx-auto">
                      <span class="display-5 text-warning fea">FEATURES</span>
                      <ul class="text-white">
                        <li>Seamless Integration with all Lab equipment - HL7 compliant integration</li>
                        <li>Search doctors nearby</li>
                        <li>Online consultations</li>
                        <li>Book your appointments online</li>
                        <li>Setting up the reminders for the medicine</li>
                        <li>Online booking for a lab test</li>
                        <li>24/7 service</li>
                      </ul>
                  </div>
                  <div class="col-5 bg-secondary mt-4 mr-auto">
                    <span class="display-5 mt-2 text-warning">ADVANTAGES</span>
                    <ul class="text-white">
                        <li>No Need to Travel</li>
                        <li>Improved ways to check your symptoms</li>
                        <li>Save Your Money</li>
                        <li>Privacy and Security</li>
                        <li>Comfortable and Convenient</li>
                        <li>No Risk of Infections From the Doctor's Clinic</li>
                        <li>Reduced Staff</li>
                      </ul>
                  </div>
                </div>
      <section>
      <div class="row">
        <div class="col mx-auto text-center">
          <div id="example" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
              <li data-target="#example" data-slide-to="0" class="active"></li>
              <li data-target="#example" data-slide-to="0"></li>
              <li data-target="#example" data-slide-to="0"></li>
            </ul>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="https://blog.practo.com/wp-content/uploads/2020/03/Banner-requirement-12-1-1170x460.jpg" alt="project">
              </div>
              <div class="carousel-item">
                <img src="https://entrackr.com/wp-content/uploads/2018/01/practo-image-2-1200x600.jpg" alt="project">
              </div>
              <div class="carousel-item">
                <img src="https://blog.practo.com/wp-content/uploads/2018/01/Practo-Insurance-Solution-patient-final-1-1164x460.png" alt="project">
              </div>
            </div>
            <a href="#example" class="carousel-control-prev" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a href="#example" class="carousel-control-next" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>
          </div>
        </div>
      </div>
      </section>
      <br/>
      <br/>
      @if(session('message')){
        <script>
        swal({
            title: "Thank You!",
            text: "Your booking has been confirmed.",
            icon: "success",
        });
        </script>
      }
      @endif
      @if(session('login')){
        <script>
        swal({
            title: "Logged in successfully!",
            icon: "success",
        });
        </script>
      }
      @endif
      @if(session('logout')){
        <script>
        swal({
            title: "Logged out successfully!",
            icon: "success",
        });
        </script>
      }
      @endif
      @if(session('access')){
        <script>
        swal({
            title: "Access Denied!",
            text: "Please login to access this page",
            icon: "error",
        });
        </script>
      }
      @endif
      <footer class=" bg-secondary" id="footer"><h4 class="text-warning" id="about">World's Largest Healthcare</h4>
      <div class="text-white">
            Practo has been at the fore front of digital healthcare in India and in a very short span of time it has redefined the way healthcare services can be delivered using the backbone of technology. 
            In an extensive interview with Srikanth RP, Shashank ND, Founder, Practo, tells us how Practo has grown to be the world’s largest healthcare appointment platform connecting millions of patients 
            to more than 200,000 healthcare practitioners, 10,000 hospitals and over 5000 diagnostic centers across 50+ cities and 15 countries across the world. 
        </div>
        <br/>
        <h4 id="contact" class="text-warning">Contact Us</h4>
        <div class="text-white">Ph No:040 6698 9898</div>
        <br/>
        <h6 class="text-warning">Social Media</h6>
        <nav>
          <i class="fab fa-facebook-f mr-2"></i><a href="https://www.facebook.com/practo" class="text-info">Facebook</a><br/>
          <i class="fab fa-twitter mr-2"></i><a href="https://twitter.com/Practo" class="text-info">Twitter</a><br/>
          <i class="fab fa-linkedin mr-2"></i><a href="https://www.linkedin.com/company/practo-technologies-pvt-ltd" class="text-info">Linkedin</a><br/>
          <i class="fab fa-youtube mr-2"></i><a href="https://www.youtube.com/user/PractoSupport" class="text-info">Youtube</a>
        </nav>
        <br/>
        <h6>Address:</h6>
        <div>Salarpuria symbiosis Arekere Village Begur, Bannerghatta Main Rd, Venugopal Reddy Layout, Uttarahalli Hobli, Bengaluru, Karnataka 560076</div>
      </footer>
    </body>
  </html>
