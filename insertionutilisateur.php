<?php 

session_start();
if ( $_SESSION['auth'] != true ) {
    header('location:authentification.php');
}

try {
	

    include('database.php');
$pseudo=$_POST['pseudo'];
$password=$_POST['password'];
$role=$_POST['role'];




if (isset($_SESSION['pseudo'])) {

$inserttt=$bdd->prepare('INSERT INTO utilisateur (pseudo,password,role) VALUES (?,?,?)');
$inserttt->execute(array($pseudo,$password,$role));



   
header('location:ajoututilisateur.php');

$message="utilisateur ajouté";
echo '<script type="text/javascript">'
. 'alert(" '.$message.'");'

. '</script>';
}else {
	echo('pas de chance');

}


} catch (Exception $e) {
	die('erreur'.$e->getmessage());
}

 ?>