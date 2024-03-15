<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teams</title>
    <style>
        body{
            background-color: blanchedalmond;
        }
        label{
font-size: 60px;
           
            font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
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
    padding-top: 24px;
   
}
button:hover{
	cursor: pointer;
    font-size: 19px;
    border-radius: 20px;
    background-color: #4dc951; 
    color: rgba(255, 255, 255, 0.842);
}
select{
    font-size: 40px;
    border-radius: 20px;
    color: rgb(0, 0, 0);
    
}
    </style>
</head>
<body>

    <form id="teamForm">
        @csrf
        <label for="team">Choose your team:</label>
        <select id="team" name="team">
            <option value="team1">Team 1</option>
            <option value="team2">Team 2</option>
            <option value="team3">Team 3</option>
            <option value="team4">Team 4</option>
        </select>
        <button type="submit">Submit</button>
    </form>
    

    <script>
        document.getElementById("teamForm").addEventListener("submit", function(event) {
            event.preventDefault(); 
            var selectedTeam = document.getElementById("team").value;
            sendData(selectedTeam);
        });
    
        function sendData(team) {
            fetch('/teams', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({team: team})
            })
            .then(response => {
                console.log('Team selected:', team);
            })
            .catch(error => console.error('Error:', error));
        }

       
        document.getElementById("teamForm").addEventListener("submit", function(event) {
    event.preventDefault(); 

    var selectedOption = document.getElementById("team").value;
    alert("The team you chose is : " + selectedOption);
    
    

window.location.href = "/dashboard?value=" + selectedOption;
        })
    </script>
</body>
</html>