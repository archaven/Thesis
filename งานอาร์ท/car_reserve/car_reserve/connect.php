<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<title>Untitled Document</title>
</head>
<?php
$hostname = "localhost";
$username = "root";
$pass = "1234";
$db = "car";
$connect = mysql_connect($hostname,$username,$pass) or die($mysql_error("Error"));

mysql_select_db($db,$connect) or die ("Error");
mysql_query("SET character_set_results=tis620");
?>
<body>
</body>
</html>