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
        html,body
        {
            width: 100%;
            margin: 0px;
            padding: 0px;
            overflow-x: hidden;
        }
        body{
            width: 100%;
            height: 100vh;
            background-image: linear-gradient(27deg, #fcf2d8 50%, #f6f8e8 50%);
        }
          #logo {
            position:relative;
                  left:20px;
                  width:100px;
          }	
          @keyframes imgchange {
            0%{background-image: url('https://microbiozindia.com/wp-content/uploads/2020/03/Practo-image-1200x600-1.jpg');}
            33%{background-image: url('https://cedcommerce.com/blog/wp-content/uploads/2017/02/2.png');}
            66%{background-image: url('https://www.metropolisindia.com/wp-content/uploads/2017/07/form-image.png');}
            100%{background-image: url('https://s3.ap-southeast-1.amazonaws.com/images.asianage.com/images/aa-Cover-pchrhofirmi4uto5gh0ttbqp05-20190713192139.Medi.jpeg');}
          }
          #diagnostic{
            background-size: 100vw 50vh;
            text-align:center;
            height:50vh;
            animation-name: imgchange;
            animation-duration: 8s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
            animation-direction: alternate;
          }
          #diagnostic a{
            text-decoration:none;
          }
          .op{
            opacity: 85%;
          }
          .mar{
            margin-top:55px;
          }
          footer div{
            text-align:justify;
          }
          footer nav a{
            text-decoration:none;
          }
          footer nav a:hover{
            background-color:#8c8c8c;
            text-decoration:none;
          }
          .carousel-item img{
            height:50vh;
            width:100vw;
            
          }
          #about{
            text-align:center;
          }
          .sample{
            border-width: 3px;
            border-style: solid;
            border-image: 
              linear-gradient(
                to bottom, 
                red, 
                rgba(0, 0, 0, 0)
              ) 1 100%;
          }
          
        #wrldimg{
          height:60%;
          width:50%;
        }
          @media only screen and (min-width:640px){
            .fea{
            height:100%;
            line-height:2.5;
            }
          }
          .fea{
            box-shadow: 10px 10px 5px grey;
            background: #777;
            -webkit-box-shadow: 0 0 30px 17px #486685;
            -moz-box-shadow: 0 0 30px 17px #486685;
            box-shadow: 0 0 30px 17px #486685;
            border-radius: 100px/10px; 
          }
          .sample2:hover{
              box-shadow: 0 0 10px #2196f3,0 0 40px #2196f3,0 0 80px #2196f3;
            }
            #loading{
              position: fixed;
              width: 100%;
              height: 100vh;
              background:black url('https://media.giphy.com/media/WiIuC6fAOoXD2/giphy.gif') no-repeat center center;
              background-size:200px 200px;	
              z-index: 99999;
            }
            #load{
              position:fixed;
              top:48%;
              right:48%;
            }
            @media only screen and (max-width: 600px) {
            #load{
              position:fixed;
              top:52%;
              right:43%;
            }
            @keyframes imgchange {
            0%{background-image: url('https://microbiozindia.com/wp-content/uploads/2020/03/Practo-image-1200x600-1.jpg');}
            33%{background-image: url('https://cedcommerce.com/blog/wp-content/uploads/2017/02/2.png');}
            66%{background-image: url('https://www.metropolisindia.com/wp-content/uploads/2017/07/form-image.png');}
          }
          #diagnostic{
            background-image: url('https://microbiozindia.com/wp-content/uploads/2020/03/Practo-image-1200x600-1.jpg');
            background-size: 100vw 300px;
            text-align:center;
            height:300px;
            animation-name: imgchange;
            animation-duration: 8s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
            animation-direction: alternate;
          }
          .carousel-item img{
            height:300px;
            width:100vw;
            
          }
          #wrldimg{
          height:90%;
          width:50%;
          }
          }
          @media only screen and (min-width: 768px){
          .sample2{
            width:30%;
          }
        }
        #world{
          background:url('https://regmedia.co.uk/2019/10/30/tow1.jpg');
          background-size: 100vw 80vh;
          height:60vh;
        }
        @media only screen and (min-width:1200px){
      #wrldimg{
          height:90%;
          width:70%;
        }
      }
        @media only screen and (min-width:1300px){
        #worldtext{
          height:100%;
          letter-spacing:5px;
          word-spacing:10px;

        }
        #wrldimg{
          height:90%;
          width:70%;
        }
      }
      #contactus{
        background-image: url('https://webbfontaine.com/wp-content/uploads/2019/10/contactusheader.jpg');
        background-size: 100vw 50vh;
        background-repeat:no-repeat;
        text-align:center;
        height:50vh;
      }
      </style>
    </head>
    <body onload="myFunction()">
      <div id="loading" class="text-center"><span class="text-white" id="load">Loading...</span></div>
      <header class="bg-dark container-fluid">
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
              @if(session('details'))
              <li class="nav-item">
                <a class="nav-link" href="booking_list">Booking List</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="add_details">Add Test/Lab</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="login" href="logout">Logout</a>
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
        <a href="booking_page" class="btn btn-dark btn-outline-danger text-white sample2 op mar">
        BOOK A DIAGNOSTIC TEST</a>
      </div>
      <!--<section class="mt-5">
          <div class="container">-->
              <div class="row mb-5">
                  <div class="col-sm-5 col-12 bg-dark mt-4 mx-auto sample fea">
                      <span class="display-5 text-warning shadow rounded">FEATURES</span>
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
                  <div class="col-sm-5 col-12 bg-dark mt-4 mr-auto sample fea">
                    <span class="display-5 mt-2 text-warning shadow rounded">ADVANTAGES</span>
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
      @if(session('message'))
        <script>
        swal({
            title: "Thank You!",
            text: "Your booking has been confirmed.",
            icon: "success",
        });
        </script>
      
      @endif
      @if(session('login'))
        <script>
        swal({
            title: "Logged in successfully!",
            icon: "success",
        });
        </script>
      
      @endif
      @if(session('logout'))
        <script>
        swal({
            title: "Logged out successfully!",
            icon: "success",
        });
        </script>
      
      @endif
      @if(session('access'))
        <script>
        swal({
            title: "Access Denied!",
            text: "Please login to access this page",
            icon: "error",
        });
        </script>
      
      @endif
      <footer id="footer">
        <div id="world">
          <h4 class="text-warning" id="about"><span class="shadow rounded">World's Largest Healthcare</span></h4>
          <div class="row">
            <div class="text-white col-xl-6" id="worldtext">
                Practo has been at the fore front of digital healthcare in India and in a very short span of time it has redefined the way healthcare services can be delivered using the backbone of technology. 
                In an extensive interview with Srikanth RP, Shashank ND, Founder, Practo, tells us how Practo has grown to be the world’s largest healthcare appointment platform connecting millions of patients 
                to more than 200,000 healthcare practitioners, 10,000 hospitals and over 5000 diagnostic centers across 50+ cities and 15 countries across the world.
            </div>
            <div class="col-xl-6 img-fluid text-center"><img src="https://media.giphy.com/media/9tA6H1madRvUc/giphy.gif" id="wrldimg" style="border-radius:10px;"></div>
          </div>
        </div>
        <br/>
        <div class="mt-4 container-fluid" id="contactus">
          
          <h4 id="contact" class="text-warning"><span class="shadow rounded">Contact Us</span></h4>
          <div class="text-white text-center">Ph No:040 6698 9898</div>
          <br/>
          <h5 class="text-warning"><span class="shadow rounded">Social Media</span></h6>
          <nav>
            <i class="fab fa-facebook-f mr-2"></i><a href="https://www.facebook.com/practo" style="color:skyblue">Facebook</a><br/>
            <i class="fab fa-twitter mr-2"></i><a href="https://twitter.com/Practo" style="color:skyblue">Twitter</a><br/>
            <i class="fab fa-linkedin mr-2"></i><a href="https://www.linkedin.com/company/practo-technologies-pvt-ltd" style="color:skyblue">Linkedin</a><br/>
            <i class="fab fa-youtube mr-2"></i><a href="https://www.youtube.com/user/PractoSupport" style="color:skyblue">Youtube</a>
          </nav>
          <br/>
          <h5 class="text-warning"><span class="shadow rounded">Address</span></h5>
          <div class="text-white text-center">Salarpuria symbiosis Arekere Village Begur, Bannerghatta Main Rd, Venugopal Reddy Layout, Uttarahalli Hobli, Bengaluru, Karnataka 560076</div>
        </div>
      </footer>
      <script>
        $(window).scroll(function(){
          var scroll =$(window).scrollTop(),
          dh = $(document).height(),
          wh = $(window).height();
          scrollPercent = (scroll / (dh-wh))*100;
          $('#progressbar').css('height', scrollPercent + '%');
        })
        
        var preloader = document.getElementById("loading");
        function myFunction(){
          preloader.style.display = 'none';
        };
      </script>
    </body>
  </html>
