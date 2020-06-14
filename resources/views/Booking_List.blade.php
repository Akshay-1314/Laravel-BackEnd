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
      <script src="https://unpkg.com/@popperjs/core@2"></script>
      <script src="https://unpkg.com/tippy.js@6"></script>
      <title>Practo|Booking List</title>
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
          th:hover{
                  position:relative;
            top:10px;
            left:10px;
            background-color:#dfcdff;
            border-radius:0px;
            transition:0s linear;
          }
          td{
                  opacity:0.8
          }
          td:hover{
                  position:relative;
            top:10px;
                  left:10px;
                  opacity:1;
            border-radius:0px;
            transition:0s linear;
          }
          td{
                  background-color: #ffe0da;
          }
          #link,#link:hover{
            text-decoration:none;
            color:#14a4e9;;
          }
          #delete{
            color:black;
          }
      </style>
    </head>
    <body>
      <header class="bg-dark h-20 container-fluid">
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
          <a class="navbar-brand" href="../home"><img class="img-fluid" id="logo" src="https://i2.wp.com/www.cosmoderma.healios.co.in/wp-content/uploads/2019/04/practo.png" alt="practo logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
        
          <!-- Navbar links -->
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav text-center ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="home">Home</a>
            </li>
            </ul>
          </div>
        </nav>
      </header>
      <div class="container-fluid">
      @if(session('message')){
        <div class="alert alert-success text-center" role="alert">
          Record Deleted Successfully
        </div>
      }
      @endif
        <h1 class="text-center text-white mt-5 bg-secondary">List of Bookings</h1>
        <div class="text-center">
        <table class="table table-responsive-md table-bordered bg-warning">
          <thead class="text-center">
            <tr class="display-5">
              <th>Name</th>
              <th>Lab Name</th>
              <th>Test/s Name</th>
              <th>Doctor's Prescription</th>
              <th>Mobile</th>
              <th>Email</th>
              <th>Date</th>
              <th>Time-Slot</th>
              <th>Operation</th>
            </tr>
          </thead>
          <tbody class="text-center">
          @foreach($data as $value){
            <tr> 
              <td>{{$value->user_name}}
              <td>{{$value->diagnosis->lab_name}}</td>
              <td>{{$value->diagnosis->test_name}}</td>
              <td><a id="link" target="_blank" href="upload/{{$value->diagnosis->doctor_prescription}}">{{$value->diagnosis->doctor_prescription}}</a></td>
              <td>{{$value->mobile}}</td>
              <td>{{$value->email}}</td>
              <td>{{$value->date}}</td>
              <td>{{$value->time_slot}}</td>
              <td><a href="delete/{{$value->user_id}}"><i class="fas fa-trash-alt" id="tooltip" data-tippy-content="Delete"></i></a></td>
            </tr>
          }
          @endforeach
            </tbody>
        </table>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col img-fluid text-center mt-5">
            <img src="https://www.practo.com/tests/public/images/white_practo_logo.svg?1491294044182" alt="Practo">
          </div>
        </div>  
        <div class="row">
          <div class="col text-center text-white">
            Copyright © 2017, Practo. All rights reserved.
          </div>
        </div>
      </div>
      <br/>
      <br/>
      <script>
        tippy('#tooltip',{
          animation: 'scale',
          arrow: true
        });
      </script>
      </body>
    </html>
