<!DOCTYPE html>
<html>
<head>
	<title>Registrarse</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	<meta charset="UTF-8">
	<link rel="stylesheet" href="font.css">
	<link rel="stylesheet" href="formato.css">
	<link rel="stylesheet" href="main.css">
	<link rel="icon" type="image/png" href="https://static.miweb.padigital.es/var/m_9/99/99f/31553/473220-icono-1.png" >
	
        <SCRIPT LANGUAGE = “JavaScript” src = “scripmenu.js”></script>
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
					<li><a href="index.html">Inicio</a></li>
					<li><a href="inicioAlumno.php">Alumnos</a>
					</li>
					<li><a href="">Acerca de</a>
						<ul>
							<li><a href="horarios.html">Horarios</a></li>
							<li><a href="informes.html">Idiomas</a></li>
							<li><a href="testimonios.html">Testimonios</a></li>
						</ul>
					</li>
					<li><a href="contacto.html">Contacto</a></li>
					<li><a href="inicioPersonal.php">Personal</a>
					</li>
				</ul>
			</nav>
		</div>
		<p><br>
		<p><br>
		<p><br>
		<div class="w3-container w3-green">
			<h1>Registro</h1>
		</div>
		<div align="center">
			<form class="w3-container" action="controller_login.php" method="post">
				<div>
					<label class="w3-label">Nombre de usuario</label>
					<input  type="text" name="usuario">
				</div>
				<div>
					<label class="w3-label">Contraseña</label>
					<input  type="password" name="pas">
				</div>
					
			<div>
				<p><br>
				<input type="hidden" name="registrarse" value="registrarse">
				<button class="w3-btn w3-green">Registrarse</button>
			</div>
					
				<p><br>
				<p><a href="index.html">Ahora no</a></p>
			</form>
		</div>

</body>
</html>