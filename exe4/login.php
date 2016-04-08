<?php
   session_start();
   ?>
 
 <!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8" />
	<title>Login</title>
</head>
<body><form action="login.php">
	Usuário : <?php echo $_POST["usuario"]; ?><br>
    Senha : <?php echo $_POST["senha"]; ?><br>
  

     <?php
    $_SESSION["usuario"] = $_POST["usuario"];
    $_SESSION["senha"] = $_POST["senha"];
    echo "session variables are set";
    ?>


 <?php
    echo "<br>Usuário: " . $_SESSION["usuario"]. ".<br>";
    echo "Senha: " . $_SESSION["senha"]. ".<br>";

 ?>

    

</form>
   

</body>
</html>
