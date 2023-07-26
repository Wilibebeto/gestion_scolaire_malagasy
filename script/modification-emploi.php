<?php 
session_start();
 try {
 	$db = new PDO("mysql:host=localhost;dbname=gestion_scolaire","root","root");
 } catch (Exception $e) {
 	die('Error: ' . $e->getMessage());
 }

if (isset($_POST) && !empty($_POST)) {
	$matiere = $_POST['matiere'];
 	$date = date($_POST['date']);
 	$heures = $_POST['heures'];

 	// var_dump($date);die;

 	$insrt = $db->prepare("UPDATE emploi_du_temps SET matiere=:matiere, dates=:date, heures=:heures WHERE id=:id");
 	$insrt->bindValue(':matiere', $matiere, PDO::PARAM_STR);
 	$insrt->bindValue(':dates', $date, PDO::PARAM_STR);
	$insrt->bindValue(':heures', $heures, PDO::PARAM_STR);
	$insrt->execute();

 	echo "success";
 	exit;
}
 	
 ?>