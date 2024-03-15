<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <style>
        
*{padding: 0; margin: 0; box-sizing: border-box;}
body{height: 900px;
font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;

}
header {
	
	text-align: center;
	width: 100%;
	height: auto;
	background-size: cover;
	background-attachment: fixed;
	position: relative;
	overflow: hidden;
	border-radius: 0 0 85% 85% / 30%;
}
header .overlay{
	width: 100%;
	height: 100%;
	padding: 50px;
	color: #FFF;
	text-shadow: 1px 1px 1px #333;
  background-image: linear-gradient( 135deg, #b92121af 10%, #eeff05ef 100%);
	
}

h1 {
	font-family: 'Dancing Script', cursive;
	font-size: 80px;
	margin-bottom: 30px;
}

h3, p {
	font-family: 'Open Sans', sans-serif;
	margin-bottom: 30px;
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
}
button:hover{
	cursor: pointer;
    font-size: 19px;
    border-radius: 20px;
    background-color: #4dc951; 
    color: rgba(255, 255, 255, 0.842);
}
section img {
   
    max-width: 40%;     
    max-height: 40%;   
    display: block;
    margin: 0 auto;
    padding-top: 90px;
}
img{
    border-radius: 40%;
}
 footer {
    background-color: #423c3c; 
    padding: 20px; 
    text-align: center; 
  }


  footer p {
    color: #ffffff; 
    font-size: 19px; 
    margin: 5px 0; 
  }
  h2{
    padding-bottom: 30px;
  }
    </style>
</head>
<body>

    <header>
        <div class="overlay">
    <h1>University competition</h1>
    <h3 style="font-size:29px;">You can apply alone or with a team</h3>
    <p>There are four teams. You can join a team or you can enter individually. There are also 5 events and each person or team must choose one event</p>
        <br>
        <button id="btn">Follow up and submit to the competition</button>
            </div>
    </header>
    <section>
        <img src="{{ asset('com.webp')}}" >
     
    </section>
  
    <header>
        <h1>good luck</h1>
        <h2>🏆
            🥇
            🥈
            🥉
            
        
        </h2>
    </header>
    <footer>
  <p>Are you ready to take part in this competition? </p>
  <p>Register and choose a team to join </p>
  <p>Choose an event to run </p>
</footer>
<script>
/*
to be sure if the user is student
at the  universty or not .
*/

document.getElementById("btn").onclick = function() {
    var confirmm = confirm("Are you a student at the university?");

    if (confirmm) {
        window.location.href = "/form";
    } else {
        alert("You can't enter , Because you are not a university student");
    }
}


/**/
</script>
</body>
</html>