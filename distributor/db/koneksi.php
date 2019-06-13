<?php
$srvr="10.0.1.5"; //SESUAIKAN DENGAN WEBSERVER ANDA
$db="bank_darah"; //SESUAIKAN DENGAN WEBSERVER ANDA
$usr="dbuser"; //SESUAIKAN DENGAN WEBSERVER ANDA
$pwd="Hash2856";//SESUAIKAN DENGAN WEBSERVER ANDA

mysql_connect($srvr,$usr,$pwd);
mysql_select_db($db);

?>