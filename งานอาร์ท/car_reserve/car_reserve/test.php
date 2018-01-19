<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<title>รายงานการรับเรื่อง</title>
<link rel="stylesheet" type="text/css" href="../lib/web.css">
<?
include "../connect.php";
$sql2="select * from reserver_car where id_reserver=6";
$query2=mysql_query($sql2) or die ("ติดต่อไม่ได้");
$row2=mysql_fetch_array($query2);
	echo $row2['check_time_go'];
	echo "<br>";
	echo $row2['check_time_back'];
	echo "<br><hr>";
	$t1=$row2['check_time_back'];
	$t2=$row2['check_time_go'];
	$time=dateDiv($t1,$t2);
	print "$time[D] วัน";print "$time[H]ชั่วโมง";print "$time[M] นาที";print "$time[S] วินาที<br>";
$sumxxx="$time[D] วัน $time[H]ชั่วโมง $time[M] นาที $time[S] วินาที";
echo $sumxxx;
?>