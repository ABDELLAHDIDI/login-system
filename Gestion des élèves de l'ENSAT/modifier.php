<?php
include_once 'connexion.php' ; 


$id=$_POST['id1'];
$nom= $_POST['nom1'] ; 
$prenom=$_POST['prenom1'] ; 
$cne=$_POST['cne1'] ; 
$adresse=$_POST['adresse1'] ; 
$ville=$_POST['ville1'] ; 
$email=$_POST['email1'] ; 
$photo=$_POST['photo1'] ; 
$etat=$_POST['etat'] ; 
$c=$_POST['entrer'] ; 
$a=0;
if(!$a){
if(isset($nom)) {   
    if (!$cnx) {
        die("Connection failed: " . mysqli_connect_error());
      }
     
      $sql = "  UPDATE eleves SET Nom='$nom' WHERE ID_eleve=$id ";
      
   if (mysqli_query($cnx, $sql)) {
        echo "Record updated successfully".'<br>';
      }   else {
        echo "Error updating record: " . mysqli_error($cnx);
      } 
    
    }
if(isset($prenom)) {  
      $sql = "UPDATE eleves SET Prenom='$prenom' WHERE ID_eleve=$id";
      if (mysqli_query($cnx, $sql)) {
        echo "Record updated successfully".'<br>';
      }   else {
        echo "Error updating record: " . mysqli_error($cnx);
      } 
    
  }
if(isset($cne)) { 
      $sql = "UPDATE eleves SET CNE='$cne' WHERE ID_eleve=$id"; 
        if (mysqli_query($cnx, $sql)) {
        echo "Record updated successfully".'<br>';
      }   else {
        echo "Error updating record: " . mysqli_error($cnx);
      } 
    
   }
if(isset($ville)) {  
      $sql = "UPDATE eleves SET Ville='$ville' WHERE ID_eleve=$id";
      if (mysqli_query($cnx, $sql)) {
        echo "Record updated successfully".'<br>';
      }   else {
        echo "Error updating record: " . mysqli_error($cnx);
      } 
   
  }
if(isset($adresse)) {  
      $sql = "UPDATE eleves SET Adresse='$adresse' WHERE ID_eleve=$id";
      if (mysqli_query($cnx, $sql)) {
        echo "Record updated successfully".'<br>';
      }   else {
        echo "Error updating record: " . mysqli_error($cnx);
      } 
    
  }
if(isset($email)) {  
      $sql = "UPDATE eleves SET email='$email' WHERE ID_eleve=$id";
      if (mysqli_query($cnx, $sql)) {
        echo "Record updated successfully".'<br>';
      }   else {
        echo "Error updating record: " . mysqli_error($cnx);
      } 
    
  }
if(isset($photo)) {   
      $sql = "UPDATE eleves SET Photo='$photo' WHERE ID_eleve=$id";
      if (mysqli_query($cnx, $sql)) {
        echo "Record updated successfully".'<br>';
      }   else {
        echo "Error updating record: " . mysqli_error($cnx);
      } 
  
  }
  if(isset($etat)) {   
    $sql = "UPDATE eleves SET etat='$etat' WHERE ID_eleve=$id";
    if (mysqli_query($cnx, $sql)) {
      echo "Record updated successfully".'<br>';
    }   else {
      echo "Error updating record: " . mysqli_error($cnx);
    } 

}
  mysqli_close($cnx);
      
  }

  header("Location:../Gestion des élèves de l'ENSAT/home.php");


?>