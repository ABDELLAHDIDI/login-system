<?php
include_once 'connexion.php' ;  
$name = $_POST['nomEtulisateur'] ; 
$password = $_POST['motDePasse'] ; 
$a=$_POST['entrer'];
session_start() ; 
$_SESSION['a'] = $a; 
$v=0;
if(!$a){
  header("Location:../Gestion des élèves de l'ENSAT/index.html");
}
else{
if ($cnx->connect_error) {
    die("Connection failed: " . $cnx->connect_error);
  }
  
  $sql = "SELECT * FROM comptes";
  $result = mysqli_query($cnx,$sql);
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) 
if($name==$row['user'] && $password==$row['passwd']) {$v=1;break;}}
if(!$v)   {
  echo "vous n'avez pas un compte !!!!".'<br>';
  echo '<a href="index1.html">sign-up</a>'.'<br>';
  exit();
}else {
  
   header("Location:../Gestion des élèves de l'ENSAT/home.php");
  exit(); 
  
  } 

  $cnx->close();}

?>