<?php
$conexion=mysqli_connect('localhost','root','','idiomas');
mysqli_query ($conexion,"SET NAMES 'utf8'");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Lista de alumnos</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="font.css">
	<link rel="stylesheet" href="formato.css">
	<link rel="stylesheet" href="estilotabla.css">
	<link rel="stylesheet" href="main.css">
	
	<link rel="icon" type="image/png" href="https://static.miweb.padigital.es/var/m_9/99/99f/31553/473220-icono-1.png" >

</head>
<body>

		<div class="social-bar">
			<a href="https://www.facebook.com/" class="icon icon-facebook" target="_blank"></a>
			<a href="https://twitter.com/" class="icon icon-twitter" target="_blank"></a>
			<a href="https://www.youtube.com/" class="icon icon-youtube" target="_blank"></a>
			<a href="https://www.instagram.com/" class="icon icon-instagram" target="_blank"></a>
	    </div>

		<div id="header">
			<nav> 
				<ul class="nav">
					<li><a href="indexP.php">Inicio</a></li>
					<li><a href="">Acerca de</a>
						<ul>
							<li><a href="horariosP.html">Horarios</a></li>
							<li><a href="informesP.html">Idiomas</a></li>
							<li><a href="testimoniosP.html">Testimonios</a></li>
						</ul>
					</li>
					<li><a href="contactoP.html">Contacto</a></li>
					<li><a href="">Personal</a>
						<ul>
							<li><a href="Caja.php">Caja</a></li>
							<li><a href="lista.php">Listas</a></li>
						</ul>
					</li>
					<li><a href="index.html">Cerrar Sesión</a></li>
				</ul>
			</nav>
		</div>
		<p><br>
		<p><br>
		<p><br>
		<p><br>
		<p><br>
		<p><br>
<table align="center">
         <tr>
            <td><img src="linea.png"><br><br>
            
            <img src="Lista.png"><br><br>
			<img src="linea.png">
			</td>
         </tr>
		<p><br>
		<p><br>
		<p><br>
		<p><br>
		<p><br>
<table class="table3">

        <tr>         
            <th>Cuenta</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Idioma</th>
            <th>Nivel</th>
            </tr>
	
	<?php

	$sql="select cuenta,nombre,apellido,( SELECT nombre FROM idioma WHERE id=alumno.idioma)as idioma,(SELECT nivel FROM idioma WHERE id=alumno.idioma)as nivel FROM alumno ";

	$result=mysqli_query($conexion,$sql);
	while ($mostrar=mysqli_fetch_array($result)) {
		# code...
	?>
	
	<tr>
		<td><?php echo $mostrar['cuenta']?></td>
		<td><?php echo $mostrar['nombre']?></td>
		<td><?php echo $mostrar['apellido']?></td>
		<td><?php echo $mostrar['idioma']?></td>
		<td><?php echo $mostrar['nivel']?></td>
	</tr>
	
	<?php
	}
	?>
</table>
  		<p><br>
		<p><br>
		<p><br>
		<p><div>
			<a href="">©2014 Advance Language Centre  </a>&nbsp; &nbsp; 
			<a href="">Política de privacidad  </a>&nbsp; &nbsp;
			<a href="">Aviso legal   </a>&nbsp; &nbsp;
			<a href="">Consultas y sugerencias  </a>
		</div>
	</body>
</html>