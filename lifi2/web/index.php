<?php
header("Content-Type:text/plain");
/*ini_set('display_errors', true);
error_reporting(E_ALL);
echo "Old max_execution: ".ini_get('max_execution_time')."s"."\n";
ini_set('max_execution_time', 300);
echo "New max_execution: ".ini_get('max_execution_time')."s"."\n";
echo "Old memory_limit: ".ini_get('memory_limit')."M"."\n";
ini_set("memory_limit", "500M");
echo "New memory_limit: ".ini_get('memory_limit')."M"."\n";*/

function getRealIP() {
if (!empty($_SERVER['HTTP_CLIENT_IP']))
return $_SERVER['HTTP_CLIENT_IP'];
if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
return $_SERVER['HTTP_X_FORWARDED_FOR'];
return $_SERVER['REMOTE_ADDR'];
}
$ipcliente=getRealIP();
echo "te conectaste desde la ip: ".$ipcliente"<br/>";

$tamañoArchivo = 100;
$link = 'http://cachefly.cachefly.net/'.$tamañoArchivo.'mb.test';

$start = microtime_float();
//$size = filesize($link);
$file = file_get_contents($link);
$end = microtime_float();

echo "\n";
$time = $end - $start;
//$size = $size / $cantBytes;
$size = $tamañoArchivo;
$speed = $size / $time;

echo "Velocidad de coneción: ".$speed." MB/s (tiempo: ".$time."s; Size:".$size."mb)";

function microtime_float()
{
    list($useg, $seg) = explode(" ", microtime());
    return ((float)$useg + (float)$seg);
}




?>