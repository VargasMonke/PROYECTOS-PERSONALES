 <!DOCTYPE html>
<!-- Condicional para inico con rol Administrador-->
	<?php
	session_start();
	if (@!$_SESSION['user']) {
		header("Location:index.php");
	}elseif ($_SESSION['rol']==1) {
		header("Location:admin.php");
	}
	?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Proyecto Academias</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Joseph Godoy">

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>


    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
  </head>
<body data-offset="40" background="images/fondotot.jpg" style="background-attachment: fixed">
<div class="container">
<header class="header">
<div class="row">
	<?php
	include("include/cabecera.php");
	?>
</div>
</header>

  <!-- Navbar
    ================================================== -->
<?php

include("include/menu.php");

?>
<!-- ======================================================================================================================== -->

<div id="myCarousel" class="carousel slide homCar">
		<div class="carousel-inner" style="border-top:18px solid #222; border-bottom:1px solid #222; border-radius:4px;">
		  <div class="item active">
			<img src="images/psicologia.jpg" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>Apoyo psicológico</h4>
				  <p>
				  Consiste en sesiones de atención psicológica, se realizan en dentro de las instalaciones. Se desarrollan sesiones grupales al mes con cada uno de los grupos o usuario con el fin de generar un ambiente agradable y de confianza para cada unos de ellos.
				  </p>
			</div>
		  </div>
		  <div class="item">
			<img src="images/trsocial.jpg" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>Trabajo social</h4>
				  <p>Los Programas de Reinserción Social están destinados a buscar un integración absoluta a las personas con la sociedad	 </p>
			</div>
		  </div>
		  <div class="item">
			<img src="images/terapiaO.jpg" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>Terapia ocupacional </h4>
				  <p>
				  uso terapéutico de las actividades de cuidado, trabajo y juego para incrementar la independencia funcional, aumentar el desarrollo y prevenir la incapacidad; puede incluir la adaptación de tareas o del entorno para alcanzar la máxima independencia y para aumentar la calidad de vida.
				  </p>
			</div>
		  </div>
		  <div class="item">
			<img src="images/nutricion.jpg" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>Nutrición</h4>
				  <p>
				  Promover la alimentación nutricional, los hábitos alimentarios y estilos de vida saludables entre los jóvenes, y la modificación de los factores del entorno que apoyen el cambio de comportamientos, para la prevención de la malnutrición en todas sus formas.
				  </p>
			</div>
		  </div>
		  <div class="item">
			<img src="images/pedagogia.jpg" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>Pedagogía</h4>
				  <p>
				  A través de las funciones sustantivas de la Facultad: docencia, vinculación, investigación, extensión y difusión, se promueve en los jóvenes a la comprensión de las dinámicas educativas del entorno, a fin de insertarse en la discusión y solución de las problemáticas mediante la educación formal, no formal e informal.
				  </p>
			</div>
		  </div>
		  <div class="item">
			<img src="images/enfermeria.jpg " alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>>Enfermeria</h4>
				  <p>
				  Fomentar el cuidado integral a los jóvenes, aplicando el Proceso de Atención.</p>
			</div>
		  </div>
		</div>
	<a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
	<a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
</div>
<h3>Áreas de Apoyo</h3>
<div class="row" style="text-align:center">
			<div class="span2">
				<div class="well well-small">
					<h4>Psicología</h4>
					<a href="al.php"><small>Ver detalles</small></a>
				</div>
			</div>
			
			<div class="span2">
				<div class="well well-small">
					<h4>Trabajo Social</h4>
					<a href="te.php"><small>Ver detalles</small></a>
				</div>
			</div>
			<div class="span2">
				<div class="well well-small">
					<h4>Terapia Ocupacional</h4>
					<a href="fi.php"><small>Ver detalles</small></a>
				</div>
			</div>
			<div class="span2">
				<div class="well well-small">
					<h4>Nutrición</h4>
					<a href="fp.php"><small>Ver detalles</small></a>
				</div>
			</div>
			<div class="span2">
				<div class="well well-small">
					<h4>Pegagogía</h4>
					<a href="fm.php"><small>Ver detalles</small></a>
				</div>
			</div>
			<div class="span2">
				<div class="well well-small">
					<h4>Enfermería</h4>
					<a href="md.php"><small>Ver detalles</small></a>
				</div>
			</div>

	
			<div class="span12">
				<div class="well well-small">
					<h4 >Material de Trabajo para Profesionales Tratantes</h4>
					<a href="edf.php"><small>Ver detalles</small></a>

					
					<h4>Historiales y documentación de procesos</h4>
					<a href="mie.php"><small>Ver detalles</small></a>


				</div>
			</div>
		
			
			
</div>
<h3>Áreas más sobresalientes</h3>
<div class="row">

	<div class="span4">
	<div class="thumbnail">
	<h3 style="text-align:center">Psicología</h3>
	<img src="images/Psico.png" alt="#"/>
	<div class="caption">
	<h5>Metodología de trabajo</h5>	
	<p align="justify">
	
	Uno de los principales factores que favorecen el éxito a la hora de reinsertarse puede encontrarse en la propia voluntad de cambiar del sujeto, además de la presencia de facultades cognitivas suficientes para comprender los propios actos y sus consecuencias y la concienciación respecto a la necesidad de cambio. Otro de los mayores predictores de éxito se encuentran en la presencia de motivaciones personales y metas vitales. Dichas metas pueden incluir la recuperación de relaciones familiares (destacando especialmente la de los hijos), conseguir trabajo y estabilidad o cambiar por completo su vida.
	</p>
	<a class="pull-right" href="al.php">Ver detalles</a>
	<br/>
	</div>
	</div>
	</div>

	<div class="span4">
	<div class="thumbnail">
	<h3 style="text-align:center">Trabajo Social</h3>	
	<img src="images/trsoc.png" />
	<div class="caption">
	<h5> Metodología de trabajo</h5>	
	<p align="justify">
	
	El trabajador social como pedagogo social se convierte en uno de los profesionales idóneos para participar en proyectos; que mejoren la sociedad, y potenciar a los individuos y grupos para que sean capaces de resolver sus problemas y trabajar en equipo en pro de mejorar su calidad de vida.
	</p>
	<a class="pull-right" href="ta.php">Ver detalles</a>
	<br/>
	</div>
	</div>
	</div>

	<div class="span4">
	<div class="thumbnail">
	<h3 style="text-align:center">Pedagogía</h3>	
	<img src="images/pedag.png"/>
	<div class="caption">
	<h5>Metodología de trabajo</h5>	
	<p align="justify">
	
	El trabajo social se convierte en una de las áreas idóneos para participar en proyectos; que mejoren la sociedad, y potenciar a los jovenes y grupos para que sean capaces de resolver sus problemas y trabajar en equipo en pro de mejorar su calidad de vida.
	</p>
	<a class="pull-right" href="cb.php">Ver detalles</a>
	<br/>
	</div>
	</div>
	</div>


</div>
<hr/>
<div class="row">
	<div class="span6">
	<div class="well well-small">
		<h3>Importante</h3>	
		<p>
		Lo mejor para nosotros es proporcionar un acceso libre, sencillo y coherente a los profesionales de las diversas áreas que se ofrecen  en el lugar de trabajo.
		</p>
	</div>
	</div>
	<div class="span6">
	<div class="well well-small">
		<h3>Áreas</h3>
		<h5>Nuevos procesos</h5>	
		<p>
		Nuevos procesos
Tendremos una página actualizada y nuestros profesionales podrán contar con todos nuestros cursos disponibles, así como la visualización de procesos e historias de los joven ya registrados y procesos nuevos  que se añadan a la página.
	
		</p>
		
	</div>
	</div>
	
	
</div>
<!-- Footer
      ================================================== -->
<hr class="soften"/>
<footer class="footer">

<hr class="soften"/>
<p>&copy; Copyright Jonnathan Lopera & Alvaro Marin<br/><br/></p>
 </footer>
</div><!-- /container -->
    
	</style>
  </body>
</html>