<?php include('php_code.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

<center>

<br>
<h1> Ingresa </h1>
<br>


<form method="post" action="login.php"> 
<input type="text" name="nombre"><br><br>
<input type="text" name="apellido">	<br><br>
<!--<button type="submit" name="guardar">Guardar</button>-->
 <button type="submit" name="ingresar2">ingresar</button>
</form>
<br><br>
<div class="mensaje">
    <?php
    $mensaje=$_SESSION['mensaje']; 
        echo $mensaje;?>
</div>



</body>
</html>