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
        :root {
        --mainColor: #ff9800;
        --white: #ffffff;
        --skyblue: #fed9c9;
        }
        body{
            width: 100%;
            height: 100vh;
        }
          #logo {
            position:relative;
                  left:20px;
                  width:100px;
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
            height:70vh;
            width:100%;
            
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
          @media only screen and (min-width:640px){
            .fea{
            height:100%;
            line-height:2.5;
            }
          }
          .fea{
            /*box-shadow: 10px 10px 5px grey;
            background: #777;
            -webkit-box-shadow: 0 0 30px 17px #486685;
            -moz-box-shadow: 0 0 30px 17px #486685;
            */
            -webkit-box-shadow: 3px 3px 5px 6px #ccc;  /* Safari 3-4, iOS 4.0.2 - 4.2, Android 2.3+ */
            -moz-box-shadow:    3px 3px 5px 6px #ccc;  /* Firefox 3.5 - 3.6 */
            box-shadow:         3px 3px 5px 6px #ccc;
            border-radius:5px;
            background: #ff9966;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #ff5e62, #ff9966);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #ff5e62, #ff9966); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            transition: all 500ms cubic-bezier(0.77, 0, 0.175, 1);	
          }
          #worldtext{
          height:100%;
          transition: all 500ms cubic-bezier(0.77, 0, 0.175, 1);	
          }
          .fea:before, .fea:after ,#worldtext:before,#worldtext:after{
            content: '';
            position: absolute;	
            transition: inherit;
            z-index: -1;
          }

          .fea:hover{
            color: var(--white);
            transition-delay: .5s;
          }
          #worldtext:hover{
            color: var(--skyblue);
            transition-delay: .5s;
          }
          .fea:hover:before, #worldtext:hover:before{
            transition-delay: 0s;
          }

          .fea:hover:after{
            background: var(--white);
            transition-delay: .35s;
          }
          #worldtext:hover:after{
            background: var(--skyblue);
            transition-delay: .35s;
          }
          /* From Top */

          .fea:before, 
          .fea:after, #worldtext:before, #worldtext:after{
            left: 0;
            height: 0;
            width: 100%;
          }
          .fea:before{
            bottom: 0;	
            border: 1px solid var(--white);
            border-top: 0;
            border-bottom: 0;
          }
          #worldtext:before{
            bottom: 0;	
            border: 1px solid var(--skyblue);
            border-top: 0;
            border-bottom: 0;
          }

          .fea:after, #worldtext:after{
            top: 0;
            height: 0;
          }

          .fea:hover:before,
          .fea:hover:after ,#worldtext:hover:before,#worldtext:hover:after{
            height: 100%;
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
            
            #world{
              
            }
            @media only screen and (max-width: 600px) {
              .t{
                margin-top:100px;
              }
            #load{
              position:fixed;
              top:52%;
              right:43%;
            }
          .carousel-item img{
            height:300px;
            width:100vw;
            
          }
          #wrldimg{
          height:90%;
          width:70%;
          }
          }
          @media only screen and (min-width: 768px){
          .sample2{
            width:100%;
            font-size:1.3rem;
          }
          #diagnos{
            height:85vh;
            width:100vw;
          }
        }
        @media only screen and (min-width:1200px){
      #wrldimg{
          height:90%;
          width:70%;
        }
      }
        @media only screen and (min-width:1300px){
        #wrldimg{
          height:90%;
          width:70%;
        }
        .fea1,#contactus{
          font-size:20px;
        }
      }
        @media only screen and (max-width:768px){
          #diagnos{
            height:325px;
            width:100vw;
          }
        }
      #contactus{
        text-align:center;
        background:url('https://i.imgur.com/R3cpQ9R.gif');
        background-size:100% 100%;
      }
      .s:hover,
      .s:focus {
        box-shadow: 0 0.5em 0.5em -0.4em var(--mainColor);
        transform: translateY(-0.25em);
        background: white;
      }
      .diag{
        -webkit-box-shadow: 3px 3px 5px 6px #ccc;  /* Safari 3-4, iOS 4.0.2 - 4.2, Android 2.3+ */
        -moz-box-shadow:    3px 3px 5px 6px #ccc;  /* Firefox 3.5 - 3.6 */
        box-shadow:         3px 3px 5px 6px #ccc;
        border-radius:5px;
      }
      </style>
      <script src="https://unpkg.com/scrollreveal@4"></script>
      <script>
        window.sr = ScrollReveal();
      </script>
    </head>
    <body onload="myFunction(),changeImg()">
      <div id="loading" class="text-center"><span class="text-white" id="load">Loading...</span></div>
      <header>
        <nav class="navbar navbar-expand-md navbar-light" style="background:rgb(254, 241, 224);">
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
                <a class="nav-link text-dark s" href="">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark s" href="#about">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark s" href="#contact">Contact Us</a>
              </li>
              @if(session('details'))
              <li class="nav-item">
                <a class="nav-link text-dark s" href="booking_list">Booking List</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark s" href="add_details">Add Test/Lab</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark s" id="login" href="logout">Logout</a>
              </li>
              @else
              <li class="nav-item">
                <a class="nav-link text-dark s" id="logout" href="admin">Admin Login</a>
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
      <img name="slide" id="diagnos" />
      <div class="container mt-5 diag col-10">
      <div class="row">
      <div class="col-md-6 col-12" style="background:#9bc400">
      <img class="img-fluid" src="https://i2.wp.com/www.cosmoderma.healios.co.in/wp-content/uploads/2019/04/practo.png" alt="practo logo">
      </div>
      <div class="col-md-6 col-12 text-center"><br/>
      <img src="https://image.flaticon.com/icons/svg/3079/3079182.svg" height="150px;" class="mt-4">
      <h4>Your Home for Health</h4>
      <a href="booking_page" class="btn btn-dark btn-outline-danger mt-4 text-white sample2 mar">
      
        BOOK A DIAGNOSTIC TEST</a>
      <br/>
      <br/>
      </div>
      </div>
      </div>
      <!--<section class="mt-5">
          <div class="container">-->
            <div class="container col-10">
              <div class="row mb-5">
                  <div class="col-md-5 col-sm-12 mt-5 mx-auto sample fea">
                      <span class="text-warning" style="font-size:40px;">FEATURES</span>
                      <ul class="text-dark fea1" style="list-style-type:none;">
                        <li><img src="https://image.flaticon.com/icons/png/512/3050/3050467.png" height="40px" width="50px">&nbsp;&nbsp;&nbsp;Seamless Integration</li>
                        <li><img src="https://image.flaticon.com/icons/svg/1021/1021566.svg" height="40px" width="50px">&nbsp;&nbsp;&nbsp;Search doctors nearby</li>
                        <li><img src="https://www.flaticon.com/premium-icon/icons/svg/3040/3040207.svg" height="40px" width="50px">&nbsp;&nbsp;&nbsp;Online consultations</li>
                        <li><img src="https://image.flaticon.com/icons/svg/2907/2907150.svg" height="40px" width="50px">&nbsp;&nbsp;&nbsp;Book your appointments online</li>
                        <li><img src="https://image.flaticon.com/icons/svg/2689/2689957.svg" height="40px" width="50px">&nbsp;&nbsp;&nbsp;Setting up of the reminders</li>
                        <li><img src="https://image.flaticon.com/icons/svg/3030/3030193.svg" height="40px" width="50px">&nbsp;&nbsp;&nbsp;Online booking for a lab test</li>
                        <li><img src="https://www.flaticon.com/premium-icon/icons/svg/2964/2964616.svg" height="40px" width="50px">&nbsp;&nbsp;&nbsp;24/7 service</li>
                      </ul>
                      
                  </div>
                  <div class="col-md-5 col-sm-12 mt-5 mr-auto sample fea bg-white">
                    <span class="mt-2 text-warning" style="font-size:40px;">ADVANTAGES</span>
                    <ul class="text-dark fea1" style="list-style-type:none;">
                        <li><img src="https://image.flaticon.com/icons/svg/2840/2840300.svg" height="40px" width="50px">&nbsp;&nbsp;&nbsp;No Need to Travel</li>
                        <li><img src="https://image.flaticon.com/icons/svg/3107/3107572.svg" height="40px" width="50px">&nbsp;&nbsp;&nbsp;Ways to check your symptoms</li>
                        <li><img src="https://image.flaticon.com/icons/svg/888/888383.svg" height="40px" width="50px">&nbsp;&nbsp;&nbsp;Save Your Money</li>
                        <li><img src="https://image.flaticon.com/icons/svg/3064/3064067.svg" height="40px" width="50px">&nbsp;&nbsp;&nbsp;Privacy and Security</li>
                        <li><img src="https://www.flaticon.com/premium-icon/icons/svg/2888/2888169.svg" height="40px" width="50px">&nbsp;&nbsp;&nbsp;Comfortable and Convenient</li>
                        <li><img src="https://image.flaticon.com/icons/svg/3035/3035422.svg" height="40px" width="50px">&nbsp;&nbsp;&nbsp;No Risk of Infections</li>
                        <li><img src="https://image.flaticon.com/icons/svg/1420/1420070.svg" height="40px" width="50px">&nbsp;&nbsp;&nbsp;Reduced Staff</li>
                      </ul>
                  </div>
              </div>
            </div>
      <section class="container col-12 col-sm-10">
      <div class="row">
        <div class="col mx-auto text-center animatecar">
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
          <h4 class="text-warning" id="about"><span class="shadow rounded"><img src="https://image.flaticon.com/icons/png/512/814/814513.png" height="40px" width="50px">&nbsp;&nbsp;&nbsp;World's Largest Healthcare</span></h4>
          <div class="row">
            <div class="text-dark col-xl-6" id="worldtext" style="font-size:20px;">
                Practo has been at the fore front of digital healthcare in India and in a very short span of time it has redefined the way healthcare services can be delivered using the backbone of technology. 
                <br/><br/>In an extensive interview with Srikanth RP, Shashank ND, Founder, Practo, tells us how Practo has grown to be the world’s largest healthcare appointment platform connecting millions of patients 
                to more than 200,000 healthcare practitioners, 10,000 hospitals and over 5000 diagnostic centers across 50+ cities and 15 countries across the world.Do Great is our motto and is the hallmark of a true Practeon.
            </div>
            <div class="col-xl-6 img-fluid text-center"><img src="https://media.giphy.com/media/9tA6H1madRvUc/giphy.gif" id="wrldimg" style="border-radius:10px;"></div>

          </div>
        </div>
        <br/>
        <div class="mt-4 bg-dark" id="contactus">
          <h4 id="contact" class="text-warning"><span class="shadow rounded">Contact Us</span></h4>
          <div class="text-white text-center">Ph No:040 6698 9898</div>
          <br/>
          <h5 class="text-warning"><span class="shadow rounded">Social Media</span></h6>
          <nav>
            <i class="fab fa-facebook-f mr-2" style="color:#ffffff;"></i><a href="https://www.facebook.com/practo" style="color:skyblue">Facebook</a><br/>
            <i class="fab fa-twitter mr-2" style="color:#ffffff;"></i><a href="https://twitter.com/Practo" style="color:skyblue">Twitter</a><br/>
            <i class="fab fa-linkedin mr-2" style="color:#ffffff;"></i><a href="https://www.linkedin.com/company/practo-technologies-pvt-ltd" style="color:skyblue">Linkedin</a><br/>
            <i class="fab fa-youtube mr-2" style="color:#ffffff;"></i><a href="https://www.youtube.com/user/PractoSupport" style="color:skyblue">Youtube</a>
          </nav>
          <br/>
          <h5 class="text-warning"><span class="shadow rounded">Address</span></h5>
          <div class="text-white text-center">Salarpuria symbiosis Arekere Village Begur, Bannerghatta Main Rd, Venugopal Reddy Layout, Uttarahalli Hobli, Bengaluru, Karnataka 560076</div>
          <br/>
        </div>
        
      </footer>
      <script>
        var preloader = document.getElementById("loading");
        function myFunction(){
          preloader.style.display = 'none';
        };

        sr.reveal('.sample2,.diag,.fea,.animatecar,#world,#contactus',{
          origin:'bottom',
          distance:'100px',
          duration:500,
          easing:'linear',
          scale:0.9,
          mobile:true,
          reset:false,
          viewFactor:0.4,
        });
        var i=0;
        var images = [];
        var time = 5500;

        images[0] = 'https://miro.medium.com/max/5508/1*6FON-FzLT2DCQfI2TY-tNA.png';
        images[1] = 'https://sa.kapamilya.com/absnews/abscbnnews/media/ancx/culture/2020/17/caf1.jpg';
        images[2] = 'https://www.ghp-news.com/wp-content/uploads/2019/12/blood-tests.jpg';
        images[3] = 'https://twistarticle.com/wp-content/uploads/2019/11/Practo-offers-free-online-consultation.jpg';

        function changeImg(){
          document.slide.src = images[i];

          if(i<images.length-1){
            i++;
          } else{
            i=0;
          }

          setTimeout("changeImg()",time);
        }
      </script>
    </body>
  </html>
