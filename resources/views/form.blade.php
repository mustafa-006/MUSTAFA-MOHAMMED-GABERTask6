<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The Form</title>
    <style>
* {
    box-sizing: border-box;
}

html {
    scroll-behavior: smooth;
}

body {
    margin: 0;
    box-sizing: border-box;
    font-family: "poppins";
    letter-spacing: 2px;
}
h3 {
    font-size: 2.5rem;
}
.container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}


a {
background-color: #4CAF50; 
border: none;
color: white;
padding: 15px 32px;
text-align: center;
text-decoration: none;
display: inline-block;
font-size: 16px;
margin: 4px 2px;
transition-duration: 0.4s; 
cursor: pointer;
border-radius: 20px;
}
a:hover{
cursor: pointer;
font-size: 19px;
border-radius: 20px;
background-color: #4dc951; 
color: rgba(255, 255, 255, 0.842);
}
    </style>
</head>
<body>
    
    @auth
    <h3>You have already registered. Click here to access your account</h3>
    <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a><br><br>
    <h3>To see the score for each team, click here</h3>
    <a href="{{ url('/score') }}" >Score</a>
@else
<h3>To log in click here</h3>
    <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

    @if (Route::has('register'))
    <h3>Click here if you want to create an account</h3>
        <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
    @endif
@endauth
  
</section>
<script>
// function goToSelect(){
// window.location.href="/select"
// }

</script>
</body>
</html>