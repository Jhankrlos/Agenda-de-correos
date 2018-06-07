<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <title>Complete your data</title>
        <link rel="stylesheet" href="css/stylecomplete.css">
    </head>
    <body>
        
        <div class="left">
            
            <h2 class="title">Complete:</h2>
            <form class="form">
                <input class="name" type="text" name="name" placeholder="What's your name?"> 
                <input class="lastname" type="text" name="lastname" placeholder="What's your last name?"> 
                <select class="gender" name="gender">
                <option value="1">What's your gender?</option>
                <option value="2">Male</option>
                <option value="3">Female</option>
            </select>
                <input class="email" type="text" name="email" placeholder="What's your e-mail">
            </form>
            
        </div>
    
        <div class="right">
            <img class="agenda" src="img/agenda.png">
            
        </div>
        <input type="button" onclick="location.href='../src/class/bienvenido.html'" value="Next">
    </body>
</html>

