<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8" />
	<title>Login</title>
</head>
<body><form action="login.php">
POST<br>
	Usuário : <?php echo $_POST["usuario"]; ?><br>
    Senha : <?php echo $_POST["senha"]; ?>


<br><br>
COOKIE<br>
   <?php
   $cookie_usuario = $_POST["usuario"];
   $cookie_senha = $_POST["senha"];
   setcookie($cookie_usuario, $cookie_senha, time() + (86400 * 30), "/");

    if(!isset($_COOKIE[$cookie_usuario])){
    	echo "<br>Cookie named '" . $cookie_usuario . "' is not set";
  
    }else{
    	echo "Cookie '" . $cookie_usuario . "' is set<br>";
        echo "Value is " . $_COOKIE[$cookie_usuario];
    	    }
    ?>

</form>
   

</body>
</html>
