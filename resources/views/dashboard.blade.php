
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>dashboard</title>
    <style>
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
.solo{
    text-align: center;
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    font-size: 40px;
    margin-top: 250px;
}

    </style>
</head>
<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('the Dashboard') }}
            </h2>
        </x-slot>
      <button onclick="select()">select team or individual</button><br><br><br>
      <h3>*you must choose one event from four events</h3><br>
      <form id="eventsForm">
        @csrf
        <label for="events">Choose your event:</label>
        <select id="event" name="event">
            <option value="eventA">event A</option>
            <option value="eventB">event C</option>
            <option value="eventC">event C</option>
            <option value="eventD">event D</option>
        </select>
        <button type="submit">Submit</button>
    </form>
    <p class="solo">{{ $message }}</p>

   
    </x-app-layout>
  


    <script>
function select(){
    window.location.href="/select"
}
document.getElementById("eventsForm").addEventListener("submit", function(event) {
            event.preventDefault(); 
            var selectedEvent = document.getElementById("event").value;
            sendData(selectedEvent);
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
                console.log('event selected:', team);
            })
            .catch(error => console.error('Error:', error));
        }

       
        document.getElementById("eventsForm").addEventListener("submit", function(event) {
    event.preventDefault(); 

    var selectedOption = document.getElementById("event").value;
    alert("The event you chose is : " + selectedOption);
    document.write("You are now assigned to do the event:" +selectedOption)
    

window.location.href = "/dashboard?value=" + selectedOption;
        })
    </script>
</body>
</html>