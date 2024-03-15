<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Score page</title>
    <style>
h1{
    text-align: center;
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
.container{
    text-align: center;
}
.column{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center; 
    width: 200px;
    text-align: center;
    margin: auto; 
}
p{
    text-align: center;
}
    </style>
</head>
<body>
    
    <h1>See the score of each team </h1>

<div class="container">
            <div class="column">
        <button onclick="one()">Score of team 1</button>
        <button onclick="two()">Score of team 2</button>
        <button onclick="three()">Score of team 3</button>
        <button onclick="four()">Score of team 4</button>
            </div>
</div>

<h1>Your Score: {{ $newScore }}</h1>
    <form action="{{ route('add.score') }}" method="POST">
        @csrf
        <button type="submit">I've completed the task</button>
    </form>

    <script>
        function one(){
            window.location.href="/one"
        }
        function two(){
            window.location.href="/two"
        }
        function three(){
            window.location.href="/three"
        }
        function four(){
            window.location.href="/four"
        }
    </script>
</body>
</html>