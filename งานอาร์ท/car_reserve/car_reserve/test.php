<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<title>��§ҹ����Ѻ����ͧ</title>
<link rel="stylesheet" type="text/css" href="../lib/web.css">
<?
include "../connect.php";
$sql2="select * from reserver_car where id_reserver=6";
$query2=mysql_query($sql2) or die ("�Դ��������");
$row2=mysql_fetch_array($query2);
	echo $row2['check_time_go'];
	echo "<br>";
	echo $row2['check_time_back'];
	echo "<br><hr>";
	$t1=$row2['check_time_back'];
	$t2=$row2['check_time_go'];
	$time=dateDiv($t1,$t2);
	print "$time[D] �ѹ";print "$time[H]�������";print "$time[M] �ҷ�";print "$time[S] �Թҷ�<br>";
$sumxxx="$time[D] �ѹ $time[H]������� $time[M] �ҷ� $time[S] �Թҷ�";
echo $sumxxx;
?>