<?php 
session_start();
 try {
 	$db = new PDO("mysql:host=localhost;dbname=reservation","root","root");
 } catch (Exception $e) {
 	die('Error: ' . $e->getMessage());
 }

if (isset($_POST) && !empty($_POST)) {
	$nom = $_POST['nom'];
 	$prenom = $_POST['prenom'];
 	$mail = $_POST['mail'];
 	$mdp = sha1($_POST['mdp']); 
 	$role = $_POST['role'];

 	// var_dump($date);die;

 	$insrt = $db->prepare("INSERT INTO user(name, firstname, email, password, role) VALUES(?, ?, ?, ?, ?)");
 	$insrt->execute(array($nom, $prenom, $mail, $mdp, $role));

 	echo "success";
 	exit;
}
 	
 ?>