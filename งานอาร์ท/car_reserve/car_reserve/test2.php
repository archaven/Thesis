<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<title>รายงานการรับเรื่อง</title>
<link rel="stylesheet" type="text/css" href="../lib/web.css">
<?
	include("../jobree/check.php");
	include("../connect.php");
	$id_reserver=$_POST['id_reserver'];
$save_date_report="now()";

$day_go=$_POST['day_go'];
$month_go=$_POST['month_go'];
$year_go=$_POST['year_go'];
$hours_go=$_POST['hours_go'];
$minutes_go=$_POST['minutes_go'];

$day_back=$_POST['day_back'];
$month_back=$_POST['month_back'];
$year_back=$_POST['year_back'];
$hours_back=$_POST['hours_back'];
$minutes_back=$_POST['minutes_back'];

$check_time_go="$year_go-$month_go-$day_go $hours_go:$minutes_go";
$check_time_back="$year_back-$month_back-$day_back $hours_back:$minutes_back";
$num_kilo_go_reserver=$_POST['num_kilo_go_reserver'];
$num_kilo_back_reserver=$_POST['num_kilo_back_reserver'];
$note=$_POST['note'];
$sum_kilo_reserver=$num_kilo_back_reserver-$num_kilo_go_reserver;
$sql2 ="UPDATE reserver_car SET check_time_go='$check_time_go',check_time_back='$check_time_back',num_kilo_go_reserver='$num_kilo_go_reserver',num_kilo_back_reserver='$num_kilo_back_reserver',save_date_report=$save_date_report,sum_kilo_reserver='$sum_kilo_reserver' where id_reserver='$id_reserver'";
$query2=mysql_query($sql2) or die ("Select Ques error");
	
	$sql	="select * from reserver_car where id_reserver=6";
	$query = mysql_query($sql) or die ("select Error");
	$row 	  = mysql_fetch_array($query);
?>
<style type="text/css">
<!--
.style7 {font-size: 12px; font-weight: bold; }
.style11 {font-size: 12px}
-->
</style>
  <br />
  <table width="37%" border="0" align="center" cellpadding="2" cellspacing="2">
    
    <tr>
      <td width="51%"><span class="style11">รถออกจากฟาร์มเวลา&nbsp;&nbsp;&nbsp;&nbsp;</span></td>
      <td width="49%"><span class="style11">
        <? if ($row['date_start']=="0000-00-00 00:00:00"){echo "0000-00-00 00:00:00";}else{ echo dateThai($row['check_time_go']);}?>
      </span></td>
    </tr>
    <tr>
      <td><span class="style11">รถกลับเข้าฟาร์มเวลา&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></td>
      <td><span class="style11">
        <? if ($row['date_end']=="0000-00-00 00:00:00"){echo "0000-00-00 00:00:00";}else{ echo dateThai($row['check_time_back']);}?>
      </span></td>
    </tr>
    <tr>
      <td><span class="style11">ระยะทางก่อนออกจากฟาร์ม</span></td>
      <td><span class="style11">
        <?=$row['num_kilo_go_reserver']?> กิโลเมตร </span></td>
    </tr>
    <tr>
      <td><span class="style11">ระยะทางเืมื่อกลับเข้าฟาร์ม</span></td>
      <td><span class="style11">
         <?=$row['num_kilo_back_reserver']?>
      กิโลเมตร</span></td>
    </tr>
    <tr>
      <td><span class="style11">รวมระยะทางทั้งหมด</span></td>
      <td><span class="style11">
      <?=$row['sum_kilo_reserver']?> 
      กิโลเมตร </span></td>
    </tr>
    <tr>
      <td><span class="style7">เวลารวมในการใช้บริการ </span></td>
      <td><span class="style11">
        <?
		$t1=$row['check_time_go'];
		$t2=$row['check_time_back'];
		$time=dateDiv($t1,$t2);
		print "$time[D] วัน";print " $time[H] ชั่วโมง";print " $time[M]นาที";print " $time[S]วินาที";
		
		?>
		<?
$time_x="$time[D] วัน $time[H] ชั่วโมง $time[M]นาที $time[S]วินาที";		
$sql3="UPDATE reserver_car SET sum_time_reserver='$time_x' where id_reserver=6";
$query3=mysql_query($sql3) or die ("Select Ques error");	
		?>
      </span></td>
    </tr>
  </table>
  <br />
  <p align="center">&nbsp;</p>
