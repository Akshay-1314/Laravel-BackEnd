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
      <link rel="stylesheet" href="{{asset('css/style.css')}}">
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
                <a class="nav-link" href="admin">Booking List</a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <div class="container-fluid" id="diagnostic">
        <a href="booking_page">
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
            text: "Your booking has been confirmed.\nCheck your email for details.",
            icon: "success",
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
