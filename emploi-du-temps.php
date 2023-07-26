<?php 
  session_start();
  if (!isset($_SESSION['user']) OR $_SESSION['user']['role'] != 'admin'){
    header("location: index.php");
  }

 try {
    $db = new PDO("mysql:host=localhost;dbname=gestion_scolaire","root","root");
 } catch (Exception $e) {
    die('Error: ' . $e->getMessage());
 }
  $conn = $db->query('SELECT * FROM emploi_du_temps');

 ?>
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
 <div id="wrapper">            
            <header id="header">
                <div class="logo">
                    <a href="index.php">
                        <img src="image/footerLogo.png">
                    </a>
                </div>
                <nav class="menu">
                    <ul>
                        <li><a href="./back-office.php">Tableau de bord</a></li>
                        <li><a href="./emploi-du-temps.php" class="active">Emploi du temps</a></li>
                        <li><a href="#">Mes demandes</a></li>
                        <li><a href="./admin.php">Admin</a></li>
                        <li><a href="./logout.php">Deconexion</a></li>
                    </ul>
                </nav>
            </header>
            <nav id="nav" class="d-flex align-items-center">
                <span class="flex-grow-1"></span>
                <div class="auth d-flex align-items-center">
                    <ul>
                       <!--  <li class='_dropdown'>
                            <button class='_dropdown-toggle user-avatar'>
                                <img src="image/avatar.jpg" alt="" />
                            </button>
                            <ul class='_dropdown-menu'>
                                <li><a href="/profil.html">Mon profil</a></li>
                                <li><a href="">Mes demandes</a></li>
                                <li><a href="">Mes ventes</a></li>
                                <li><a href="/deconnexion.html">Déconnexion</a></li>
                            </ul>
                        </li> -->
                    </ul>
                </div>
            </nav>
            <main id="main">
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-3"></div>
                    <div class="col-3"></div>
                    <div class="col-3"><a href="./ajout-emploi.php"><button class="btn btn-primary">Ajouter</button></a></div>
                </div>
                <br>
                <h3>Listes des etudiants</h3>
             <table class="table" style="font-size: 12px;">
                 <thead>
                     <th>#ID</th>
                     <th>Matiere</th>
                     <th>Dates</th>
                     <th>Heures</th>
                     <th></th>
                     <th></th>
                 </thead>
                 <tbody>
                    <?php while ($row = $conn->fetch()) 
                    {?>
                     <tr>
                         <td><?php echo $row['id'] ?></td>
                         <td><?php echo $row['matiere'] ?></td>
                         <td><?php echo $row['dates'] ?></td>
                         <td><?php echo $row['heures'] ?></td>
                         <th>
                         <a href="./modification-emploi.php?id=<?= $row['id'] ?>" class="btn btn-primary btn-sm">Modifier </a>
                         <a href="./delete.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm">Supprimer</a>
                         </th>
                         </td>
                     </tr>
                 <?php } ?>
                 </tbody>
             </table>
            </main>
        </div>
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
</body>
</html>