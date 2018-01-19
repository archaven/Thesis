<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<?
$id_car=$_POST['id_car'];
$detail_reserver=$_POST['detail_reserver'];
$num_passenger_reserver=$_POST['num_passenger_reserver'];
$passenger_name_reserver=$_POST['passenger_name_reserver'];
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
$stetus_reserver=$_POST['stetus_reserver'];
$id_driver=$_POST['id_driver'];
if ($hours_go==0){$hours_go="00";}
if ($minutes_go==0){$minutes_go="00";}
if ($hours_back==0){$hours_back="00";}
if ($minutes_back==0){$minutes_back="00";}
echo "เวลาจองรถไป $day_go-$month_go-$year_go เวลา $hours_go:$minutes_go นาที"
?>