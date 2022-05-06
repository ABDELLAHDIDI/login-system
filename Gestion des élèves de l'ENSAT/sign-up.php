<?php
include_once 'connexion.php' ;  
$nom= $_POST['nom1'] ; 
$motdepasse=$_POST['motdepasse1'] ; 
$motdepasse1=$_POST['motdepasse11'] ; 
$a=0;

if($motdepasse!=$motdepasse1 ){ echo 'le mot de passe est incorrecte !!!!!!!!!!!!!!'.'<br>'; 
       echo "<a href='index1.html' >ressayer</a> ".'<br>';  $a=1; }
if(!$a ) 
{
    $sql ="INSERT INTO  comptes (  user,passwd)
    VALUES ('$nom','$motdepasse');";
   $result = mysqli_query ($cnx,$sql) ; 
   echo 'vous avez reussit le sign-up .'.'<br>';
   echo 'prière de <a href="index.html">sign-in</a>'.'<br>';
   }

?>


