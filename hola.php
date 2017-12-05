<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

$archivo="ips.txt";
$proceso=fopen($archivo, "a") or die ("error");
$ip=$_SERVER['REMOTE_ADDR'];
echo $ip;
//$ip=gethostbyname('localhost');
$fecha=date("d/m/y");
$datos="la ip es: ".$ip."Registrada el: ".$fecha."\n";
fwrite($proceso, $datos);
fclose($proceso);


$internet_connection = @fsockopen("www.google.com",80);

if($internet_connection){
echo"Estas conectado a internet ya puedes utilizar tu servicio";
}else{
echo"No estas conectado a internet intentalo nuevamaente";
}


?>



</body>
</html>


