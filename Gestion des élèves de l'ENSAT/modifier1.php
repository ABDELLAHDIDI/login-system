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
    <title>modifier</title>
</head>
<body>
<center>
            <p class="ensat">modification</p>
        </center>

        <center>
            <form action="modifier.php" method="POST" >
                <p class="name" >ID : </p>
                <input type="text" name="id1" placeholder="ID" required="required"> <br>
                <p class="name" >Nom : </p>
                <input type="text" name="nom1" placeholder="Nom" > <br>
                <p class="name" >Prenom : </p>
                <input type="text" name="prenom1" placeholder="Prenom" > <br>
                <p class="name" >CNE : </p>
                <input type="text" name="cne1" placeholder="CNE" > <br>
                <p class="name" >Adresse : </p>
                <input type="text" name="adresse1" placeholder="Adresse" > <br>
                <p class="name" >Ville: </p>
                <input type="text" name="ville1" placeholder="Ville" > <br>
                <p class="name" >E-mail : </p>
                <input type="email" name="email1" placeholder="e-mail" > <br>
                <p class="name" >Photo : </p>
                <input type="file" name="photo1"  >   <br>
                <p class="name" >Etat: </p>
                <input type="number" name="etat" placeholder="Etat" > <br>
                <button class="register"  type="submit" name="entrer" value="1">modifier</button>
            </form>
        </center>    




</body>
</html>