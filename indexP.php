<?php 
	session_start();
	if (!isset($_SESSION['usuario'])) {
		header('Location: index.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
<title> Language School </title>

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