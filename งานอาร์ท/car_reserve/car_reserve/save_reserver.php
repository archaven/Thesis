<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<? 
ob_start();
$id=$_POST['id'];
include "connect.php";
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$sql="select department_id from member  where id='$id'";
$query=mysql_query($sql) or die ("ติดต่อไม่ได้");
$row=mysql_fetch_array($query);
$department_id_=$row['department_id'];
$sql="select department_name from department  where department_id=$department_id_";
$query=mysql_query($sql) or die ("ติดต่อไม่ได้");
$row=mysql_fetch_array($query);
$s=$row['department_name'];
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$company_reserver=$_POST['company_reserver'];
$detail_reserver=$_POST['detail_reserver'];
$stetus_go_reserver=$_POST['stetus_go_reserver'];
$num_passenger_reserver=$_POST['num_passenger_reserver'];
$passenger_name_reserver=$_POST['passenger_name_reserver'];
$date_reserver="now()";
$day_go=$_POST['day_go'];
$office_reserver_car=$_POST['office_reserver_car'];
$month_go=$_POST['month_go'];
$year_go=$_POST['year_go'];
$hours_go=$_POST['hours_go'];
$minutes_go=$_POST['minutes_go'];
$day_back=$_POST['day_back'];
$month_back=$_POST['month_back'];
$year_back=$_POST['year_back'];
$hours_back=$_POST['hours_back'];
$minutes_back=$_POST['minutes_back'];
//$date_go_reserver="$year_go-$month_go-$day_go";
$date_go_reserver=$_POST["date"];
$time_go_reserver="$hours_go:$minutes_go";
//$date_back_reserver="$year_back-$month_back-$day_back";
$date_back_reserver=$_POST["date2"];
$time_back_reserver="$hours_back:$minutes_back";
$stetus_reserver=$_POST['stetus_reserver'];
$name=$_POST['id_name'];
$ip=$_SERVER['REMOTE_ADDR'];
$tel_reserver=$_POST['tel_reserver'];
$section=$_POST['section'];
$department=$_POST['department'];
$unit=$_POST['unit'];
$name_approve="รอดำเนินงาน";
if (empty ($company_reserver)||empty($detail_reserver)||empty($stetus_reserver)||empty($num_passenger_reserver)||empty($passenger_name_reserver))
	{
		echo "<script>alert('กรุณากรอกข้อมูลให้ครบ');history.back();</script>";
		exit();
	}
//echo "$date_reserver";
include "connect.php";
mysql_query("SET NAMES TIS620");
$sql = "insert into reserver_car values('','$office_reserver_car','','$company_reserver','$detail_reserver','$stetus_go_reserver','$num_passenger_reserver','$passenger_name_reserver',$date_reserver,'$date_go_reserver',
'$time_go_reserver','$date_back_reserver','$time_back_reserver','$stetus_reserver','$id_name','','$name_approve','','','','','','','$ip','$tel_reserver','$s','$department','$unit','','','','','','')"; 
mysql_query($sql) or die ("Select Ques error");
echo "<script>alert('Complete!!');window.location='index.php?id=$id';</script>";
mysql_close();
?>