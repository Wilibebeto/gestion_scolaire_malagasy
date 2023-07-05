<?php 
session_start();
 try {
 	$db = new PDO("mysql:host=localhost;dbname=reservation","root","root");
 } catch (Exception $e) {
 	die('Error: ' . $e->getMessage());
 }

if (isset($_POST) && !empty($_POST)) {
 	$campus = $_POST['campus'];
 	$type = $_POST['type'];
 	$date = $_POST['date'];
 	$niveau = $_POST['niveau'];
 	$timed = $_POST['timed'];
 	$timea = $_POST['timea'];
 	$user_id = $_SESSION["user"]['id'];

 	// var_dump($date);die;

 	$insrt = $db->prepare("INSERT INTO reserve(user_id,level, type, date, timed, timea, campus) VALUES(?, ?, ?, ?, ?, ?, ?)");
 	$insrt->execute(array($user_id, $niveau, $type, $date, $timed, $timea, $campus));

 	echo "success";
 	exit;
}
 	
 ?>