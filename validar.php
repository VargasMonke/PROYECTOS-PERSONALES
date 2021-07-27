
<?php
//include("connect_db.php");

//$miconexion = new connect_db;

//Crea variables de sesion temprales para el usuario;
session_start();
	require("connect_db.php");
	//Variables que recojen los datos del formularios;
	$username=$_POST['mail'];
	$pass=$_POST['pass'];


	//la variable  $mysqli viene de connect_db que se traen con el require("connect_db.php");
	$sql2=mysqli_query($mysqli,"SELECT * FROM login WHERE email='$username'");
	if($f2=mysqli_fetch_assoc($sql2)){
		//Condicional de comparación de rol Administrador;
		if($pass==$f2['pasadmin']){
		//id de la base de datos;
			$_SESSION['id']=$f2['id'];
		//recoge el nombre de usuario que se esta logiando ;
			$_SESSION['user']=$f2['user'];
			$_SESSION['rol']=$f2['rol'];

			
			echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script> ';
			echo "<script>location.href='admin.php'</script>";
		
		}
	}

//Consulta de verificación de rol de profesional VERIFICA SI ESTA REGISTRADO Y CON QUE ROL;
	$sql=mysqli_query($mysqli,"SELECT * FROM login WHERE email='$username'");
	if($f=mysqli_fetch_assoc($sql)){
		if($pass==$f['password']){
			$_SESSION['id']=$f['id'];
			$_SESSION['user']=$f['user'];
			$_SESSION['rol']=$f['rol'];

			header("Location: index2.php");
		}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
		
			echo "<script>location.href='index.php'</script>";
		}
	}else{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
		
		echo "<script>location.href='index.php'</script>";	

	}

?>