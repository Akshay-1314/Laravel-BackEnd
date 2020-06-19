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
      <title>Practo|Add Details</title>
      <link rel = "icon" href =  
        "https://pbs.twimg.com/profile_images/849341342224351238/cuaVqp5x_400x400.jpg"
        type="image/x-icon">
      <style>
            #logo {
              position:relative;
                    left:20px;
                    width:100px;
            }
            .sample{
              text-align:center;
            }
            #img3,#img4{
                width:50px;
            }
            #footer{
              background: #f6f6f9;
            }
            .height{
                height:100vh;
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
            .sample1{
            border-width: 3px;
            border-style: solid;
            border-image: 
              linear-gradient(
                to bottom, 
                red, 
                rgba(0, 0, 0, 0)
              ) 1 100%;
          }
          .sample2:hover{
              box-shadow: 0 0 10px #2196f3,0 0 40px #2196f3,0 0 80px #2196f3;
            }
            #progressbar{
              position:fixed;
              top:0;
              right:0;
              width:5px;
              height:100%;
              border-radius: 10px;
              z-index:1;
              background: linear-gradient(to top,#fcb045,#fd1d1d,#834ab4);
          }
          table.table-bordered{
            border-width: 3px;
            border-style: solid;
            }
          table.table-bordered > thead > tr > th{
            border-width: 3px;
                      border-style: solid;
          }
          table.table-bordered > tbody > tr > td{
            border-width: 3px;
                      border-style: solid;
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
          }
          table{
            box-shadow: 10px 10px 5px grey;
            background: #777;
            border-radius: 100px/10px; 
          }
          .f1{
            border:1px solid black;
            border-radius:5px;
            background: #F1F2B5;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #135058, #F1F2B5);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #135058, #F1F2B5); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

            -moz-box-shadow:    3px 3px 5px 6px #ccc;
            -webkit-box-shadow: 3px 3px 5px 6px #ccc;
            box-shadow:         3px 3px 5px 6px #ccc;
          }
      </style>
    </head>
    <body onload="myFunction()">
      <div id="loading" class="text-center"><span class="text-white" id="load">Loading...</span></div>
      <header class="bg-dark h-20 container-fluid">
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
          <a class="navbar-brand" href="home"><img class="img-fluid" id="logo" src="https://i2.wp.com/www.cosmoderma.healios.co.in/wp-content/uploads/2019/04/practo.png" alt="practo logo"></a>
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
                <a class="nav-link" href="logout">Logout</a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <div id="progressbar"></div>
      <div class="container-fluid">
      @if(session('labs'))
        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
          Lab Added Successfully
        </div>
      
      @endif
      @if(session('tests'))
        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
          Test Added Successfully
        </div>
      
      @endif
      @if(session('labs_tests'))
        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
          Added Successfully
        </div>
      
      @endif
      @if(session('delete'))
        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
          Record Deleted Successfully
        </div>
      
      @endif
        <section class="row mt-5">
            <div class="col-lg f1">
            <form action="submit3" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group bg-dark sample1 text-white mt-4">
                    <label for="labs" class="text-white">Lab Name</label>
                    <textarea class="form-control" placeholder="Enter Lab Name" name="labs" rows="4" id="labs">{{old('labs')}}</textarea>
                    @error('labs')
                    <div class="text-warning">{{$message}}</div>
                    @enderror
                </div>
                <div class="text-center">
                    <button class="btn btn-outline-danger sample2 bg-dark text-white" type="submit">Add</button>
                </div>
            </form>
            </div>
            <div class="col-lg mt-4">
                <div class="text-center">
                    <table class="table table-bordered bg-dark">
                        <thead class="text-center text-white">
                            <tr class="display-5">
                            <th>Lab_id</th>
                            <th>Lab Name</th>
                            <th>Operation</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                        @foreach($labs as $lab)
                          <tr>
                            <td>{{$lab->id}}</td>
                            <td>{{$lab->lab_name}}</td>
                            <td><a href="del/{{$lab->id}}"><i class="fas fa-trash-alt" id="tooltip" data-tippy-content="Delete"></i></a></td>
                          </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>      
            </div>
        </section>
        <section class="row mt-5">
            <div class="col-lg f1">
            <form action="submit4" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group bg-dark sample1 text-white mt-4">
                    <label for="tests" class="text-white">Test Name</label>
                    <textarea class="form-control" placeholder="Enter Test Name" name="tests" rows="4" id="tests">{{old('tests')}}</textarea>
                    @error('tests')
                    <div class="text-warning">{{$message}}</div>
                    @enderror
                </div>
                <div class="text-center">
                    <button class="btn btn-outline-danger sample2 bg-dark text-white" type="submit">Add</button>
                </div>
            </form>
            </div>
            <div class="col-lg mt-4">
                <div class="text-center">
                    <table class="table table-bordered bg-dark">
                        <thead class="text-center text-white">
                            <tr class="display-5">
                            <th>Test_id</th>
                            <th>Test Name</th>
                            <th>Operation</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                        @foreach($tests as $test)
                          <tr>
                            <td>{{$test->id}}</td>
                            <td>{{$test->test_name}}</td>
                            <td><a href="trash/{{$test->id}}"><i class="fas fa-trash-alt" id="tooltip" data-tippy-content="Delete"></i></a></td>
                          </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>      
            </div>
        </section>
        <section class="row mt-5">
            <div class="col-lg f1">
            <form action="submit5" method="POST" enctype="multipart/form-data">
              @csrf
                <div class="form-group bg-dark mt-4">
                <div class="card card-body bg-dark sample1">
                  <div class="card-title text-center text-white">
                    <h4>Please enter Lab_id and Test_id from the above tables to link labs with the tests</h4>
                    <p>(If more than one test should be linked with a particular lab repeat the Lab_id for different Test_id's)</p>
                  </div>
                </div>
                  <label for="lab_id" class="text-white">Lab_id</label>
                  <input type="number" class="form-control" placeholder="Enter Lab_id" name="lab_id" value="{{old('lab_id')}}" id="lab_id" min="1">
                  @error('lab_id')
                  <div class="text-warning">{{$message}}</div>
                  @enderror
                </div>
                <div class="form-group bg-dark sample1 mt-4">
                  <label for="test_id" class="text-white">Test_id</label>
                  <input type="number" class="form-control" placeholder="Enter Test_id" name="test_id" value="{{old('test_id')}}" id="test_id" min="1">
                  @error('test_id')
                  <div class="text-warning">{{$message}}</div>
                  @enderror
                </div>
                <div class="text-center">
                    <button class="btn bg-dark btn-outline-danger sample2 text-white" type="submit">Continue</button>
                </div>
            </form>
            </div>
            <div class="col-lg mt-4">
                <div class="text-center">
                    <table class="table table-responsive-sm table-bordered bg-dark">
                        <thead class="text-center text-white">
                            <tr class="display-5">
                            <th>Test_id</th>
                            <th>Test Name</th>
                            <th>Lab_id</th>
                            <th>Lab_name</th>
                            <th>Operation</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                        @foreach($associations as $associate)
                          <tr>
                            <td>{{$associate->test_id}}</td>
                            <td>{{$associate->test_name}}</td>
                            <td>{{$associate->lab_id}}</td>
                            <td>{{$associate->lab_name}}</td>
                            <td><a href="dele/{{$associate->id}}"><i class="fas fa-trash-alt" id="tooltip" data-tippy-content="Delete"></i></a></td>
                          </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>      
            </div>
        </section>
        </div>
      <div class="container-fluid mt-5 bg-dark">
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
        <br/>
      <br/>
      </div>
      
      <script>
        tippy('#tooltip',{
          animation: 'scale',
          arrow: true
        });
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