<?php 
try {
 	$db = new PDO("mysql:host=localhost;dbname=reservation","root","root");
} catch (Exception $e) {
	die('Error: ' . $e->getMessage());
}

if(isset($_POST['id']) && isset($_POST['state'])){
	$req = $db->prepare('UPDATE reserve SET status = ? WHERE id = ?');
	$req->execute([
		$_POST['state'],
		$_POST['id']
	]);
}
