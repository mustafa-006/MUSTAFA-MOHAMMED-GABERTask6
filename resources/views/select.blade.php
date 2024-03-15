<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Select</title>
    <style>
        body{
            margin: 0;
            padding:0;
            box-sizing: border-box
        }
        div{
            padding-left: 50px;
            padding-top:50px;
            border:solid black 2px;
            border-radius: 20px
        }
        button {
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
margin-top: 70px;
}
button:hover{
cursor: pointer;
font-size: 19px;
border-radius: 20px;
background-color: #4dc951; 
color: rgba(255, 255, 255, 0.842);
}
h2{
    text-align: center;
   color: #010301;
   font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
   font-size:30px;
}
p{
    padding-top: 190px
}
    </style>
</head>
<body>
    <div>
    <h2>Welcome to the Submission Page</h2>
    <p>Please select your Submission option:</p>
    
    <form method="POST" action="{{ route('show') }}">
        @csrf
        
        <input type="radio" id="individual" name="login_type" value="individual"     >

        <label for="individual">Login Individually</label><br>
        
        <input type="radio" id="team" name="login_type" value="team">
        <label for="team">Login as a Team</label><br>
        
        <button type="submit" id="loginButton">Login</button>
    </form>
    
    <script>
        document.getElementById("loginButton").addEventListener("click", function(event) {
            var selectedOption = document.querySelector('input[name="login_type"]:checked');
            if (selectedOption && selectedOption.value === "team") {
                window.location.href = "/teams"; 
                event.preventDefault(); 
            } else {
                alert("You will login individually.");
            }
        });
    
    
    </script>
</body>
</html>