<?php

session_start() ; 
if(!$_SESSION['a'] ){
  header("Location:../Gestion des élèves de l'ENSAT/index.html");
} else {
include_once 'connexion.php' ; 
if ($cnx->connect_error) {
  die("Connection failed: " . $cnx->connect_error);
}

$sql = "SELECT * FROM eleves";
$result = mysqli_query ($cnx,$sql) ;//   $result = mysqli_query ($cnx,$sql) ; 
if ($result->num_rows > 0) {
$sql = "SELECT * FROM eleves";
$result =mysqli_query ($cnx,$sql) ;
  echo '<table border="10">
  <tr>
  <td> ID </td> 
  <td> CNE </td>
  <td> NOM </td>
  <td> PRENOM </td>
  <td> ADRESSE </td>
  <td> VILLE </td>
  <td> E-MAIL </td>
  <td> PHOTO </td>
  <td> ETAT</td>
  </tr>';
  
    while($row = mysqli_fetch_assoc($result) ) { // $row=mysqli_fetch_row($result) 
     
    echo  '<tr>'
    .'<td>'. $row['ID_eleve']        .'</td>'
    .'<td>'. $row['CNE']       .'</td>'
    .'<td>'. $row['Nom']       .'</td>'
    .'<td>'. $row['Prenom']    .'</td>'
    .'<td>'. $row['Adresse']   .'</td>'
    .'<td>'. $row['Ville']     .'</td>'
    .'<td>'. $row['email']     .'</td>'
    .'<td>'. '<img src="img/'.$row['Photo'].'" />' .'</td>'
    .'<td>'. $row['etat']     .'</td>'
    .'</tr>';
    }
  } else {
    echo "vous n'avez pas un compte !!!!".'<br>';
  echo '<a href="index1.html">sign-up</a>'.'<br>';
  exit;
    //echo "0 results";
  }
  echo '</table>'.'<br>';
  
  mysqli_close($cnx);
echo '  <form action="index1.html" method="post">
<button class="register"  type="submit" name="register" value="2">ajouter un etudiant</button>
</form>'.'  <form action="modifier1.php" method="post">
<button class="register"  type="submit" name="register" value="2">modifier</button>
</form>
'.' <form action="suprimer1.php" method="post">
<button class="register"  type="submit" name="register" value="2">suprimer un etudiant </button>
</form>'.' <form action="dcnx.php" method="post">
<button class="register"  type="submit" name="register" value="2">deconnexion </button>
</form>';}
 
?>