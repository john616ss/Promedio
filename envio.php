 <?php
include "conexion2.php";

$matr=$_POST["matricula"];
$nom=$_POST["nombre"];
$app=$_POST["apellidoP"]; 
$apm=$_POST["apellidoM"]; 
$email=$_POST["email"]; 
$tel=$_POST["telefono"]; 
$dir=$_POST["direc"]; 

$sql="INSERT INTO estudiante (Matricula, NombreAl, ApPat, ApMat, Email, Telefono, Dir)VALUES('$matr','$nom','$app','$apm','$email','$tel','$dir')";
$insertar=mysql_query($sql,$conexion);
if($insertar){
echo "Matricula: ".$matr."<br>";
echo "Nombre: ".$nom."<br>";
echo "Apellido Paterno: ".$app."<br>";
echo "Apellido Materno: ".$apm."<br>";
echo "Email: ".$email."<br>";
echo "Teléfono: ".$tel."<br>";
echo "Dirección: ".$dir."<br>";


echo "Datos guardados correctamente";
}else{

echo "error no se pudieron guardar los datos: ".mysql_error();
}
mysql_close($conexion);












/*
$sql="INSERT INTO usuarios (Id_Usuario, Nombre, Apellido_P, Correo)VALUES('','$nom','$app','$email')";
$consul=mysql_query($sql,$cadena);

if($consul){
echo "Nombre: ".$nom."<br>";
echo "Apellidos: ".$app."<br>";
echo "Email: ".$email."<br>";

echo "Datos guardados satisfactoriamente";
}else{
echo "Error al enviar los datos: ".mysql_error();
}
mysql_close($cadena);
*/

?>
 