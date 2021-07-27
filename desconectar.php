<!-- Permite Borrar todo daton ingresado en las variables de sesion -->
<?php 
session_start();
if($_SESSION['user']){	
	session_destroy();
//cierra sesion y de vulve al formulario de registro ;
	header("location:index.php");
}
else{
	header("location:index.php");
}
?>