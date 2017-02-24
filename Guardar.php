<?php
//echo "Respuesta generada por parte del servidor";
include "conexion.php";

$nom=$_POST["Nom"];
$dir=$_POST["Dir"];
$rfc=$_POST["Rfc"];
$tel=$_POST["Tel"];
$clasif=$_POST["Clasif"];
$foto=$_POST["Foto"];
$lat=$_POST["Lat"];
$longit=$_POST["Long"];

$sql="INSERT INTO servicios VALUES ('','$nom','$dir','$rfc','$tel','$clasif','$foto','$lat','$longit')";
$reg=mysqli_query($conn,$sql);  
if ($reg) {
	echo "Datos recibidos en el servidor : Nombre:".$nom."Dirección:".$dir."RFC:".$rfc."Tel:".$tel."Clasificación:".$clasif."Foto:".$foto."Latitud:".$lat."Longitud:".$longit;
} else {
	echo "Error al registrar datos:".mysqli_error();
}
mysqli_close($conn);

?>