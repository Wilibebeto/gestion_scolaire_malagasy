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
 if(isset($_GET['id'])){
     $id = $_GET['id'];
     $conn = $db->prepare('SELECT * FROM emploi_du_temps WHERE id =:id ');
     $conn->bindValue(':id', $id, PDO::PARAM_INT);
     $conn->execute();
     $emploi = $conn->fetch();
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
            <form method="POST" class="form" id="emploisForm">
                <h3>Modification d'un emplois du temps</h3><br>
               <input type="text" class="form-control" name="matiere" id="matiere" value="<?= $emploi['matiere']?>"><br>
               <input type="date" class="form-control" name="date" id="date" value="<?= $emploi['dates']?>"><br>
               <input type="text" class="form-control" name="heures" id="heures"  value="<?= $emploi['heures']?>"><br>
               <input type="submit" name="temps" id="temps" value="Modifier" class="btn btn-primary">
            </form>
            </main>
        </div>
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript">
            jQuery(function(){
                $(document).on('submit', '#emploisForm', function(){
                    // var data = new FormData();
                    $(".form-error").html('');
                    var matiere = $("#matiere").val();
                    var date = $("#date").val();
                    var heures = $("#heures").val();

                    $.post('./script/modification-emploi.php', {
                        matiere: matiere,
                        date: date,
                        heures: heures,
                    }, function(res){
                        if (res.match('success') != null) {
                            window.location.href = "emploi-du-temps.php"
                        }else{
                            $(".form-error").html(res);
                        }
                    });

                    return false;
                });
            });
        </script>
</body>
</html>