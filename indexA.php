<?php
session_start();
include 'serv.php';

if(isset($_SESSION['user'])) {?>
OCTYPE html>

<html>
	<head>
		<title>Escuela de idiomas. </title>
		  <meta charset="UTF-8">
		  <link rel="stylesheet" href="font.css">
		  <link rel="stylesheet" href="formato.css">
		  <link rel="stylesheet" href="main.css">
		  <link rel="icon" type="image/png" href="https://static.miweb.padigital.es/var/m_9/99/99f/31553/473220-icono-1.png" >
	
        <SCRIPT LANGUAGE = “JavaScript” src = “scripmenu.js”></script>
        <link rel="stylesheet" href="estilomenu.css"> 
	      
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
					<li><a href="indexA.html">Inicio</a></li>
					<li><a href="">Alumnos</a>
						<ul>
							<li><a href="horariosA.html">Horarios</a></li>
						
						</ul>
					</li>
					<li><a href="">Acerca de</a>
						<ul>
							<li><a href="informesA.html">Idiomas</a></li>
							<li><a href="testimoniosA.html">Testimonios</a></li>
						</ul>
					</li>
					<li><a href="contactoA.html">Contacto</a></li>
					<li><a href="logout.php">Cerrar Sesión</a></li>
				</ul>
			</nav>
		</div>
		<p><br>
		<p><br>
		<p><br>
		 <br> <br> <br> <br> <br> <br>
      
      <table align="center">
         <tr>
            <td><img src="linea.png"><br><br>
            <img src="logo.png"><br>
			<img src="portada.png"><br><br>
			<img src="linea.png">
			</td>
         </tr>
		 
	  </table>   
		 
		
     <table align="center">

             <tr>
	      <br> <br>
           <td><img src="portada1.png"></td>
       </tr>

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