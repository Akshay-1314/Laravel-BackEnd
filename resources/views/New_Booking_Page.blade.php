<!DOCTYPE html>
  <html lang="en-US">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
      
      <title>Practo|New Booking Page</title>
      <link rel = "icon" href =  
        "https://pbs.twimg.com/profile_images/849341342224351238/cuaVqp5x_400x400.jpg"
        type="image/x-icon">
      <link rel="stylesheet" href="{{asset('css/style1.css')}}">
    </head>
    <body>
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
            </ul>
          </div>
        </nav>
      </header>
      <section class="container-fluid bg-warning">
        <div>
          <form action="submit" method="POST" enctype="multipart/form-data" onsubmit="return validate()">
            @csrf
            <div class="form-group bg-secondary text-white mt-4">
              <label for="sel1">Select a Test/s (hold ctrl to select more than one):</label>
              <select class="form-control" id="sel1" name="sellist1[]" size="5" multiple>
                <option value="liver function test">Liver Function Test</option>
                <option value="endoscopy">Endoscopy</option>
                <option value="mri">MRI</option>
                <option value="ct">CT</option>
                <option value="cbp">CBP</option>
                <option value="" selected>None</option>
              </select>
              <div id="error" class="text-warning"></div>
            </div>
            
            <div class="form2 form-group col bg-secondary mt-4">
              <label for="file1" class="text-white">Upload a Prescription</label>
              <input type="file" class="form-control-file border" id="file1" name="file">
              @error('file')
              <div class="text-warning">{{$message}}</div>
              @enderror
            </div>
            <div class="form3 form-group bg-secondary text-white mt-4">
              <label for="sel2">Select a Lab</label>
              <select class="form-control" id="sel2" name="sellist2">
                <option value="vijaya diagnostic centre">Vijaya Diagnostic Centre</option>
                <option value="neuberg anand reference lab">Neuberg Anand Reference Lab</option>
                <option value="medplus pathology lab">Medplus Pathology Lab</option>
                <option value="dr a r diagnostic labs">Dr A R Diagnostic Labs</option>
                <option value="pathcare labs">Pathcare Labs</option>
                <option value="" selected>None</option>
              </select>
              @error('sellist2')
              <div class="text-warning">{{$message}}</div>
              @enderror
            </div>
            <div class="text-center">
              <button class="btn bg-secondary text-white" type="submit" name="submit";">Continue</button>
            </div>
          </form>
        </div>
      </section>
        <footer id="footer" class="mt-4">
          <br/>
          <div>
            <h4 class="text-center">Why Book with Us?</h4>
          </div>
          <div class="container">
            <div class="row mb-4">
                <div class="col img-fluid">
                  <img src="https://www.practo.com/tests/public/icons/home_sample_pickup.png" alt="project">
                  <span>Home sample collection for FREE</span>
                </div>
                <div class="col img-fluid">
                  <img src="https://www.practo.com/tests/public/icons/practo_powered_labs.png" alt="project">
                  <span>Practo Associate Labs: Labs with industry standards</span>
                </div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col img-fluid">
                <img id="img3" src="https://www.practo.com/tests/public/icons/e_reports_on_next_day.png" alt="project">
                <span>Digital reports</span>
              </div>
              
              <div class="col img-fluid">
                <img id="img4" src="https://www.practo.com/tests/public/icons/offers.png" alt="project">
                <span>Offers and affordable prices</span>
              </div>
            </div>
          </div>
          <br/>
        </footer>
        <script>
          function validate(){
            if(document.getElementById('sel1').value==""){
              document.getElementById('error').innerHTML = 'Please select atleast one test';
              return false;
            }
          }
        </script>
    </body>
  </html>
