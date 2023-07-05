<?php 
  session_start();
  if (isset($_SESSION['user'])){
    header("location: index.php");
  }
 ?>
<!DOCTYPE html>
<html>
    <head>
    	<title>Login</title>
    	<link rel="stylesheet" type="text/css" href="css/styles.css">
    	<link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css">
    	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    </head>
    <body class="bg-gray">
        <div id="auth-container">
        <div class="auth-form">
            <form method="POST" class="form" id="loginForm">
            	<div class="form-logo">
            		<a href="index.php"><img src="image/avatar.jpg"></a>
            	</div>
            
                <div class="form-error"></div>
                <div class="form-group">
                    <label for="inputUsrname" class="required">Username</label>
                    <input type="text" value="" name="username" id="inputUsrname" required autofocus>
                </div>
                
                <div class="form-group">
                    <label for="inputPassword" class="required">Mot de passe</label>
                    <input type="password" name="password" id="inputPassword" required>
                </div>
                
                <div class="form-group text-right font-weight-bold">
                    <a href="">Mot de passe oublié ?</a>
                </div>
                <div class="pt-10">
                    <input type="submit" name="conn" id="conn" class="btn btn-primary" value="Connecter">
                </div>
            </form>
        </div>

        <script type="text/javascript" src="./js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript">
            jQuery(function(){
                $(document).on('submit', '#loginForm', function(){
                    // var data = new FormData();
                    $(".form-error").html('');
                    var username = $("#inputUsrname").val();
                    var password  = $("#inputPassword").val();

                    $.post('./script/login.php', {
                        username: username,
                        password: password
                    }, function(res){
                        if (res.match('success') != null) {
                            window.location.href = "back-office.php"
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