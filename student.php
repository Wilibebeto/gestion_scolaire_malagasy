<?php 
  session_start();
  if (!isset($_SESSION['user']) OR $_SESSION['user']['role'] != 'etudiant'){
    header("location: index.php");
  }
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="css/back.css">
	<link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
</head>
<body class="bg-gray">
 etudiant           
           
</body>
</html>