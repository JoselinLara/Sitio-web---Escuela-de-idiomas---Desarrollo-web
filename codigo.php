<?php
function generarCodigo($longitud) {
 $key = '';
 $pattern = '1234567890ABCDEFGHIJKMNOPQRSTUVWXYZ';
 
 $max = strlen($pattern)-1;
 for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
 return $key;
}
$codigo=generarCodigo(6);
 
//Ejemplo de uso
 
echo $codigo; // genera un código de 6 caracteres de longitud.
?>