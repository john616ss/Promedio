 <?php
include "conexion2.php";


$matr=$_POST["matricula"];
$cal1=$_POST["primerp"];
$cal2=$_POST["segundop"]; 
$cal3=$_POST["tercerp"]; 
$cal4=$_POST["cuartop"]; 
$PRO=($cal1+$cal2+$cal3+$cal4)/4;


$sql="INSERT INTO calificaciones (Matricula, Cparc1, Cparc2, Cparc3,Cparc4, Promedio)VALUES('$matr','$cal1','$cal2','$cal3','$cal4','$PRO')";
$insertar=mysql_query($sql,$conexion);
if($insertar){
    
echo "ParcialUno: " .$cal1.'<br>';
echo "ParcialDos: " .$cal2."<br>";
echo "ParcialTres: " .$cal3."<br>";
echo "ParcialCuatro: " .$cal4."<br>";
echo "Promedio: " .$PRO."<br>";


echo "Datos guardados correctamente";
}else{

echo "error no se pudieron guardar los datos: ".mysql_error();
}
mysql_close($conexion);
