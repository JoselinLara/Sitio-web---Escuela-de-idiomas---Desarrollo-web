<!DOCTYPE html>
<html>

	<head>
		<title>Escuela de idiomas. Caja</title>
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
		
		
		
		 <table align="center">
         <tr>
            <td><img src="linea.png"><br><br>
            
            <img src="etiqueta.png"><br><br>
			<img src="linea.png">
			</td>
         </tr>
		 
	  </table> 
		 
		 
		 
		 
		 
	<br><br><br><br><br><br><br><br>	 
		 
		 
	<font color="white">	 
		<form name="formulario" method="post" action="pdf.php">
			
			
			<center><fieldset><legend><h1><font  FACE="Calibri Light">Recibo de Caja:</h1></legend> 
			<br><br><br>
      <table> 
 
	      <tr>
              <td><font  FACE="Calibri Light">Fecha:</td>
              <td><input type="date" name="bday"id="fecha"></td>
          </tr>
		  <tr>

              <td><font  FACE="Calibri Light">Nombre del Alumno(a):</td>
              <td><input type="text" name="nom" id="nombre"></td>
          </tr>
          
		  
		  <tr>
          <td><font  FACE="Calibri Light">No.cuenta:</td>
         <td><input type="text" name="nCuenta" id ="cuenta"> </td>
         </tr>  </table> 

      <br><br><br>
				
		      
	<table> 		
				
	 	 <tr>	
			 <td><font  FACE="Calibri Light">Tipo de Idioma:</td>
			 <td><select name="idiom" id="idioma">   
				 <option value="Inglés"><font  FACE="Calibri Light">Inglés</option>    
				 <option value="Aleman" selected><font  FACE="Calibri Light">Alemán</option>  
				 <option value="Francés"><font  FACE="Calibri Light">Francés</option>
				 <option value="Italiano"><font  FACE="Calibri Light">Italiano</option> 
				 <option value="Español"><font  FACE="Calibri Light">Español</option> 
			  </select> </td>
			 <td><font  FACE="Calibri Light">Nivel</td>
			 <td><select name="lvl" id="nivel">   
				 <option value="Básico"><font  FACE="Calibri Light">Básico</option>    
				 <option value="Elemental" selected><font  FACE="Calibri Light">Elemental</option>  
				 <option value="Elemental Superior"><font  FACE="Calibri Light">Elemental Superior</option>
				 <option value="Intermedio I"><font  FACE="Calibri Light">Intermedio I</option> 
				 <option value="Intermedio II"><font  FACE="Calibri Light">Intermedio II</option> 
				 <option value="Avanzado I"><font  FACE="Calibri Light">Avanzado I</option> 
				 <option value="Avanzado II"><font  FACE="Calibri Light">Avanzado II</option></select></td> 
             </tr>
    </table> 
	<br><br>
	<table> 
			 <tr>
			 <td><font  FACE="Calibri Light">Forma de Pago:</td><td></td> </tr>
			
			 <tr>
			 <td><font  FACE="Calibri Light">Efectivo</td> 
			 <td><input type="radio" name="opciones" value="opcion1" checked id="efectivo"></td>
			 </tr>
				
			 <tr>
			 <td><font  FACE="Calibri Light">Cheque</td> 
			 <td><input type="radio" name="opciones" value="opcion2" checked id="cheque"></td>
			 </tr>
			 <tr>
			 <td><font  FACE="Calibri Light">Depósito</td> 
			 <td><input type="radio" name="opciones" value="opcion3" checked id="deposito"></td>
			 </tr>
		</table> 
		<br><br>	 
		<table> 
			<tr>
			<td><font  FACE="Calibri Light">Cantidad:&nbsp; &nbsp;&nbsp; &nbsp; 
			&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td><td> <input type="number"    name="quantity" min="1" max="5" id="cantidad"></td>
			</tr>
			
		</table>
		<br><br>
		
		<table align="center">
        <tr>		
		<div align="center">
				&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; 
				&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; 
				&nbsp;&nbsp;<input style="cursor: pointer" class="botonS"type="submit" value="Enviar">&nbsp;&nbsp;<input style="cursor: pointer" class="botonS" type="reset" value="Restablecer" > 
		</div>
		</tr>
		</table> 
		<br><br><br>
		</fieldset></center>
	</form>
	</font>
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