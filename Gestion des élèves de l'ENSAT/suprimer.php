<?php
include_once 'connexion.php' ; 
$id=$_POST['id1'];
$c=$_POST['sup'] ; 
if(!$c){
    header("Location:../Gestion des élèves de l'ENSAT/index.html");

}
else{

   $sql=" DELETE FROM `eleves` WHERE ID_eleve=$id";
   $result = mysqli_query($cnx,$sql);
   header("Location:../Gestion des élèves de l'ENSAT/home.php");
}



















?>