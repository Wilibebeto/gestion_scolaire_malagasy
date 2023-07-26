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

 	$insrt = $db->prepare("INSERT INTO emploi_du_temps(matiere, dates, heures) VALUES(?, ?, ?)");
 	$insrt->execute(array($matiere, $date, $heures));

 	echo "success";
 	exit;
}
 	
 ?>