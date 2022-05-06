<?php
include_once 'connexion.php' ;  
$nom= $_POST['nom1'] ; 
$prenom=$_POST['prenom1'] ; 
$cne=$_POST['cne1'] ; 
$adresse=$_POST['adresse1'] ; 
$ville=$_POST['ville1'] ; 
$email=$_POST['email1'] ; 
$photo=$_POST['photo1'] ; 
$register=$_POST['register1'] ; 
$etat=0;
$a=0;


    $sql ="INSERT INTO  eleves  (  CNE, Nom, Prenom, Adresse, Ville, email, Photo, etat)
    VALUES ('$cne','$nom','$prenom','$adresse','$ville','$email','$photo','$etat');";
   $result = mysqli_query ($cnx,$sql) ; 
   header("Location:../Gestion des élèves de l'ENSAT/home.php");
 

?>

