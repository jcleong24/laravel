<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

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

<body class="antialiased">
    @if (session('save'))
    <script>
        alert("Success");
    </script>
    @endif
    @if (session('error'))
    <script>
        alert("Failed");
    </script>
    @endif

    <header class="w3-container w3-theme w3-padding-medium" id="myHeader">
        <div class="w3-center w3-animate-bottom">
            <h4>ONLINE TUTOR BOOKING WEB SITES</h4>
            <h1>MY TUTOR</h1>
            <a class="w3-bar-item w3-button w3-right" href="{{ url('registration') }}">
                Register</a>
        </div>
    </header>


    <div class="w3-container w3-padding">
        <div class="w3-card w3-round">
            <header class="w3-black w3-padding">
                <h3>Login Form</h3>
            </header>
            <div class="w3-padding ">
                <form action="{{route('login.post')}}" method="post" accept-charset="UTF-8">
                    {{csrf_field()}}
                    <label for="email">Email</label>
                    <p><input id="email" class="w3-input w3-round w3-border" type="email" name="email" required></p>
                    @if ($errors->has('email'))
                    <span class="w3-red">{{ $errors->first('email') }}</span>
                    @endif
                    <label for="pass">Password</label>
                    <p><input id="pass" class="w3-input w3-round w3-border" type="password" name="password" required></p>
                    @if ($errors->has('password'))
                    <span class="w3-red">{{ $errors->first('password') }}</span>
                    @endif
                    <div class="w3-row">
                        <input type="checkbox" name="remember"> Remember Me
                        <button class="w3-button w3-amber w3-round w3-right">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

<footer class=" w3-padding-64 w3-center w3-opacity w3-light-grey w3-medium">
  <footer class="w3-footer w3-center w3-black">MyTutor App</footer>
  <p>No Copyright, all right reserved</p>

    <!-- <footer class="w3-footer w3-padding-64 w3-center w3-black w3-opacity w3-light-grey w3-large">Mytutor App</footer>
     <footer class="w3-container w3-center w3-opacity w3-light-grey w3-large">
        <p>No Copyright, all right reserved</p>
    </div> -->



</html>