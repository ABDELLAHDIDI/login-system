<?php

session_start() ; 
if(!$_SESSION['a'] ){
  header("Location:../Gestion des élèves de l'ENSAT/index.html");
} ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>suprimer</title>
</head>
<body>
    

<center>
            <p class="ensat">suprimer</p>
        </center>

        <center>
            <form action="suprimer.php" method="POST" >
                <p class="name" >saisir ID de l'etudiant que vous voulez suprimer : </p>
                <input type="text" name="id1" placeholder="ID" required="required"> <br>
                <button class="register"  type="submit" name="sup" value="1">suprimer</button>
            </form>
        </center>    

</body>
</html>
