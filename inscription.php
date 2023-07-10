<!DOCTYPE html>
<html>
	<head>
    	<title>Inscription</title>
    	<link rel="stylesheet" type="text/css" href="css/styles.css">
    	<link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css">
    	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    </head>
    <body class="bg-gray">
        <div id="auth-container">
        <div class="auth-form-2">
            <form method="POST" class="form" id="registerForm">
            	<div class="form-logo">
            		<a href="index.php"><img src="image/avatar.jpg"></a>
            	</div>
            
                <div class="form-error"></div>
                <label>Vous etes?</label>
                <select name="role" id="inputRole">
                	<option value="">Choisissez......</option>
                	<option value="etudiant">Etudiant</option>
                	<option value="admin">Admin</option>
                </select>
                <div class="form-group">
                    <label for="inputLastname" class="required">Nom</label>
                    <input type="text" value="" name="lastname" id="inputLastname" required autofocus>
                </div>

                <div class="form-group">
                    <label for="inputFirstname" class="required">Prénom</label>
                    <input type="text" value="" name="firstname" id="inputFirstname" required autofocus>
                </div>

                <div class="form-group">
                    <label for="inputUsrname" class="required">Username</label>
                    <input type="text" value="" name="username" id="inputUsrname" required autofocus>
                </div>
                
                <div class="form-group">
                    <label for="inputPassword" class="required">Mot de passe</label>
                    <input type="password" name="password" id="inputPassword" required>
                </div>
                
                <div class="form-group text-right">
                    <a href="login.php">Vous avez un compte?connectez-vous</a>
                </div>
                <div class="pt-10">
                    <input type="submit" name="conn" id="conn" class="btn btn-primary" value="Inscription">
                </div>
            </form>
        </div>

        <script type="text/javascript" src="./js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript">
            jQuery(function(){
                $(document).on('submit', '#registerForm', function(){
                    // var data = new FormData();
                    $(".form-error").html('');
                    var lastname = $("#inputLastname").val();
                    var firstname = $("#inputFirstname").val();
                    var username = $("#inputUsrname").val();
                    var password  = $("#inputPassword").val();
                    var role = $("#inputRole").val();

                    $.post('./script/register.php', {
                        username: username,
                        password: password,
                        lastname: lastname,
                        firstname: firstname,
                        role: role,
                    }, function(res){
                        if (res.match('success') != null) {
                            window.location.href = "login.php"
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