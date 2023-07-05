<?php
 session_start();
 try {
 	$db = new PDO("mysql:host=localhost;dbname=gestion_scolaire","root","root");
 } catch (Exception $e) {
 	die('Error: ' . $e->getMessage());
 }
if (isset($_POST['username']) && isset($_POST['password'])) {
	$data = $_POST;

	// requete
	// if user existe ====> create a session
	// else ====> message error
	$conn = $db->prepare("SELECT * FROM user WHERE username=? AND password=?");
	$conn->execute([$data['username'],sha1($data['password'])]);
	$user = $conn->fetch();
	if (!$user) {
		echo "Votre username ou votre mot de passe n'est pas correct.";
		exit;
	}else{
		$_SESSION['user'] = $user;
		echo "success";
		exit;
	}

}else{
	echo "Veuillez saisir votre username et votre mot de passe s'il vous plait.";
	exit;
}