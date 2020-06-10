<!DOCTYPE html>
  <html lang="en-US">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <link rel="stylesheet" href="{{asset('css/style4.css')}}">
    </head>
    <body>
        <div class="bgimg">
            <div class="centerdiv">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcS09nSSOV3sEiGgOJW0F7L_LVK44If07LuLmh5J50YUdNl0cQlh&usqp=CAU" id="profilepic">
                <h2>ADMIN LOGIN</h2>
                <form action="booking_list" method="POST">
                @csrf
                    <div>
                        <input type="text" name="username" class="inputbox" placeholder="Username" required>
                    </div>
                    <br>
                    <div>
                        <input type="Password" name="pwd" class="inputbox" placeholder="Password" required>
                    </div>
                    <br>
                    <div>
                        <button type="submit">LOGIN</button>
                    </div>
                </form>
                <br>
            </div>
        </div>
        @if(session('message')){
        <script>
        swal({
            title: "Login Failed!",
            text: "Invalid Username or Password",
            icon: "error",
        });
        </script>
      }
      @endif
    </body>
</html>