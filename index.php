<?php 
  session_start();
  $user = null;
  if (isset($_SESSION['user'])){
    $user = $_SESSION['user'];
  }
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Bienvenue</title>
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
  <link rel="stylesheet" href="aos/dist/aos.css">
</head>
<body>
  <div class="hero">
    <div class="row">
      <div class="col-6">
        <div class="hero-img"  data-aos="fade-right" data-aos-delay="150" data-aos-easing="ease">
          <img src="image/freelancer.png" alt="">
        </div>

      </div>
      <div class="col-6">

        <div class="hero-text"  data-aos="fade-left" data-aos-delay="150" data-aos-easing="ease">
          <h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit,</h1>    
        </h1>
        <!-- <button class="btn btn-primary">Savoir plus...</button> -->
        </div>

      </div>
    </div>

    <div class="menu">
      <ul> 
      <li><a href="">Qui sommes nous?</a></li>
      <li><a href="">Aide</a></li>
      <li><a href="">Mention legales</a></li>
       <?php if (!is_null($user)): ?>
    <div class="auth d-flex align-items-center">
        <ul>
            <li class='_dropdown'>
                <button class='_dropdown-toggle user-avatar'>
                    <img src="image/avatar.jpg" alt="" />
                </button>
                <ul class='_dropdown-menu'>
                    <?php if ($user['role'] == 'etudiant') ?>
                    <li><a href="./student.php">Mon profil</a></li>
                    
                    <?php if ($user['role'] == 'admin'): ?>
                    <li><a href="./back-office.php">Back office</a></li>
                    <?php endif ?>
                    <li><a href="./logout.php">Déconnexion</a></li>
                </ul>
            </li>
        </ul>
    </div>
  <?php else: ?>
    <a href="login.php"><button class="btn btn-primary" style="position: absolute;top: 25px;left: 1200px;">Se connecter</button></a>
    <li><a href="login.php">Se connecter</a></li>
  <?php endif ?>
      </ul>
    </div>
  </div>
<br>
  <div class="contenu-1">
    <div class="row">
      <div class="col-6">
        <div class="how-img" >
          <img src="image/how-1.png" alt="">
        </div>
      </div>
      <div class="col-6">
        <div class="how-txt" >
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
        </div>
      </div>
    </div>
  </div>
 <br>
  <div class="banner" data-aos="fade-in" data-aos-delay="150" data-aos-easing="ease">
    <img src="image/banner-3.png" alt="">
  </div>

  <br>
  <div class="contenu-1">
    <div class="row">
      <div class="col-6">
        <div class="how-img" data-aos="fade-right" data-aos-delay="450" data-aos-easing="ease">
          <img src="image/how-2.png" alt="">
        </div>
      </div>
      <div class="col-6">
        <div class="how-txt"  data-aos="fade-in" data-aos-delay="650" data-aos-easing="ease">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
        </div>
      </div>
    </div>
  </div>

    <div class="contenu-1">
    <div class="row">
      <div class="col-6">
        <div class="how-txt-1" data-aos="fade-in" data-aos-delay="650" data-aos-easing="ease">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
        </div>
      </div>
      <div class="col-6">
        <div class="how-img" data-aos="fade-right" data-aos-delay="450" data-aos-easing="ease">
          <img src="image/how-3.png" alt="">
        </div>
      </div>
    </div>
  </div>
 <br>
  <footer id="footer">
    <div class='footer-top'>
        <div class='wp'>
            <div class='row'>
                <div class='col-6 col-sm-3 col-md-3'>
                    <ul>
                        <li><h3>À propos</h3></li>
                        <li><Link to="/">Qui sommes-nous ?</Link></li>
                        <li><Link to="/">Mentions légales</Link></li>
                        <li><Link to="/contact">Contact</Link></li>
                    </ul>
                </div>
                <div class='col-6 col-sm-3 col-md-3'>
                    <ul>
                        <li><h3>Découvrir</h3></li>
                        <li><Link to="/features">Fonctionnalités</Link></li>
                    </ul>
                </div>
                <div class='col-6 col-sm-3 col-md-3'>
                    <ul>
                        <li><h3>Ressources</h3></li>
                        <li><Link to="/help">Aide</Link></li>
                        <li><Link to="/">Blog</Link></li>
                        <li><Link to="/">CGU</Link></li>
                        <li><Link to="/">Politique de confidentialité</Link></li>
                    </ul>
                </div>
                <div class='col-6 col-sm-3 col-md-3'>
                    <ul>
                        <li><h3>Nous suivre</h3></li>
                        <li>
                            <ul class='social-media'>
                                <li><a href="https://web.facebook.com/logement" target="_blank"><i class='fab fa-facebook'></i></a></li>
                                <li><a href="https://twitter.com/@logement" target="_blank"><i class='fab fa-twitter'></i></a></li>
                                <li><a href="https://www.youtube.com/logement" target="_blank"><i class='fab fa-youtube'></i></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <div class='footer-bottom'>
        <div class='wp text-center' style={{ maxWidth: "640px", fontSize: "14px" }}>
            &copy; Copyright 2023 Wili Bebeto. 
        </div>
    </div>
</footer>
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
  <script type="text/javascript" src="aos/dist/aos.js"></script>
  <script type="text/javascript">
        	AOS.init({
        		duration: 1000
        	});
</script>
</body>
</html>