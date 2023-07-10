<?php 
session_start();
 try {
 	$db = new PDO("mysql:host=localhost;dbname=gestion_scolaire","root","root");
 } catch (Exception $e) {
 	die('Error: ' . $e->getMessage());
 }

if (isset($_POST) && !empty($_POST)) {
	$lastname = $_POST['lastname'];
 	$firstname = $_POST['firstname'];
 	$username = $_POST['username'];
 	$password = sha1($_POST['password']); 
 	$role = $_POST['role'];

 	// var_dump($date);die;

 	$insrt = $db->prepare("INSERT INTO user(username, lastname, firstname, password, role) VALUES(?, ?, ?, ?, ?)");
 	$insrt->execute(array($username, $lastname, $firstname, $password, $role));

 	echo "success";
 	exit;
}
 	
 ?>