<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
    <title>Landing Page</title>

</head>
<header class="w3-container w3-theme w3-padding-medium" id="myHeader">
    <div class="w3-center w3-animate-bottom">
        <h4>ONLINE TUTOR BOOKING WEB SITES</h4>
        <h1>MY TUTOR</h1>
    </div>
</header>

<style>
    .w3-button {
        width: 150px
    }
</style>

<body>
    <div style="display:flex; justify-content: center">
        <div class="w3-container w3-card w3-padding w3-margin" style="width: 600px; margin:auto; text-align:center">
            <h2 class="w3-content w3-center">Landing Page</h2>
            
            <p class="w3-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam scelerisque sapien eu mi interdum, quis mollis lorem imperdiet.
                <a href="https://www.lipsum.com/feed/html">Lorem Ipsum Generator</a>.
            <p>MENU</p>     
            <p><button type="login" class="w3-button w3-round w3-black"><a href="{{ url('login') }}">Login</button></p>
            <p><button type="registration" class="w3-button w3-round w3-black"><a href="{{ url('registration') }}">Register</button></p>
            </form>
        </div>
    </div>
</body>
<footer class="w3-container w3-padding-84 w3-center w3-opacity w3-light-grey w3-xlarge">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    <p class="w3-medium">Powered by <a href="https://code.visualstudio.com/" target="_blank">Visual Studio</a></p>
</footer>
