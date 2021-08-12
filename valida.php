<?php
	$conexion=mysqli_connect('localhost','root','','idiomas');
		mysqli_query ($conexion,"SET NAMES 'utf8'");
$username = $_POST['username'];
$password = $_POST['password'];
$sql="select * from cuentasalumno WHERE cuentaA='$username'";
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
	$row = $result->fetch_array(MYSQLI_ASSOC);
	}
	if (password_verify($password, $row['contraA'])) { 
	    $_SESSION['loggedin'] = true;
		$_SESSION['username'] = $username;
		$_SESSION['start'] = time();
		$_SESSION['expire'] = $_SESSION['start'] + (5 * 60);
		 header("Location:indexA.html");
	
}else { 
	 echo "Username o Password estan incorrectos.";
	 echo "<br><a href='inicioAlumno.php'>Volver a Intentarlo</a>";

 }

?>
