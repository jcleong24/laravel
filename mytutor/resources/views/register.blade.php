<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
  <title>register</title>
  <style>
    @media screen and (max-width: 768px) {
      .w3-container {
        width: 100%;
      }
    }

    @media screen and (min-width: 768px) {
      .w3-container {
        width: 700px;
        margin: 0 auto;
      }
    }
  </style>

</head>

<header class="w3-container w3-theme w3-padding-medium" id="myHeader">
  <div class="w3-center w3-animate-bottom">
    <h4>ONLINE TUTOR BOOKING WEB SITES</h4>
    <h1>MY TUTOR</h1>
    <a class="w3-bar-item w3-button w3-right" href="{{ url('login') }}">
        Login</a>
  </div>
</header>

<body>
  <div class="w3-container">
    <div class="w3-padding">
      <div class="w3-card w3-round">
        <header class="w3-black w3-padding">
          <h3>Registration Form</h3>
        </header>
        <div class="w3-padding ">
          <form action=" {{route('register.post') }}" method="post">
            {{csrf_field()}}
            <label for="name">Name</label>
            <p><input id="name" class="w3-input w3-round w3-border" type="name" name="name" required></p>
            @if ($errors->has('name'))
            <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
            <label for="email">Email</label>
            <p><input id="email" class="w3-input w3-round w3-border" type="email" name="email" required></p>
            @if ($errors->has('email'))
            <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
          
            <label for="pass">Password</label>
            <p><input id="pass" class="w3-input w3-round w3-border" type="password" name="password" required></p>
            @if ($errors->has('password'))
            <span class="text-danger">{{ $errors->first('password') }}</span>
            @endif
  
            <button class="w3-button w3-black w3-round">Register</button>
          </form>
        </div>
      </div>
    </div>

  </div>

</body>

<footer class=" w3-padding-64 w3-center w3-opacity w3-light-grey w3-medium">

  <footer class="w3-footer w3-center w3-black">MyTutor App</footer>
  <p>No Copyright, all right reserved</p>

</html>