<?php 
  session_start();
  if (!isset($_SESSION['user']) OR $_SESSION['user']['role'] != 'admin'){
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
 <div id="wrapper">            
            <header id="header">
                <div class="logo">
                    <a href="index.php">
                        <img src="image/footerLogo.png">
                    </a>
                </div>
                <nav class="menu">
                    <ul>
                        <li><a href="./tableadmin.php">Tableau de bord</a></li>
                        <li><a href="#" class="active">Mes demandes</a></li>
                        <li><a href="./user.php">Utilisateur</a></li>
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
                    <div class="col-4"></div>
                    <div class="col-4"></div>
                    <div class="col-4"><input type="text" name="recherche" class="form-control" placeholder="Recherche..."></div>
                </div>
                <br>
             <table class="table" style="font-size: 12px;">
                 <thead>
                     <th>Campus</th>
                     <th>Nom</th>
                     <th>Niveau</th>
                     <th>Type</th>
                     <th>heures</th>
                     <th>dates</th>
                     <th>Status</th>
                     <th>Action</th>
                 </thead>
                 <tbody>
                    <?php while ($row = $conn->fetch()) 
                    {?>
                     <tr>
                         <td><?php echo $row['campus'] ?></td>
                         <td><?php echo $row['name'] ?></td>
                         <td><?php echo $row['level'] ?></td>
                         <td><?php echo $row['type'] ?></td>
                         <td><?php echo $row['timed'] ?>
                             <?php echo $row['timea'] ?>
                         </td>
                         <td><?php echo $row['date'] ?></td>
                         <td>
                                <?php if($row['status'] == 1): ?>
                                    <i class="fa fa-check-circle text-success"></i> Accepté
                                <?php elseif($row['status'] == 2): ?>
                                    <i class="fa fa-times-circle text-danger"></i> Réfusé
                                <?php else: ?>
                                    <i class="fa fa-exclamation-triangle text-warning"></i> En attente
                                <?php endif ?>
                            </td>
                         <td>
                             <input type="submit" name="accept" class="btn btn-info change_state" data-id="<?= $row['id'] ?>" data-state="1" value="Accepter">
                             <input type="submit" name="refuser" data-id="<?= $row['id'] ?>" data-state="2" class="btn btn-danger change_state" value="Refuser">
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