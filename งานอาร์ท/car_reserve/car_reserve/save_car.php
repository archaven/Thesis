<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<? ob_start();
$farm_id_car=$_POST['farm_id_car'];
$type_car=$_POST['type_car'];
$reg_car=$_POST['reg_car'];
$brand_car=$_POST['brand_car'];
$model_car=$_POST['model_car'];
$color_car=$_POST['color_car'];
$office_car=$_POST['office_car'];
$date_car="now()";
if (empty ($farm_id_car)||empty($type_car)||empty($reg_car)||empty($model_car)||empty($color_car))
	{
		echo "<script>alert('กรุณากรอกข้อมูลให้ครบ');history.back();</script>";
		exit();
	}
$attach=$_FILES['attach']['tmp_name'];
$attach_name=$_FILES['attach']['name'];
$attach_size=$_FILES['attach']['size'];
$attach_type=$_FILES['attach']['type'];
if ($attach_size>200000)
{
echo "<script>alert('ขนาดไฟล์ภาพใหญ่เกินไป');history.back();</script>";
	exit();
}
include "connect.php";
mysql_query("SET NAMES TIS620");
$sql = "insert into car values('','$farm_id_car','$type_car','$reg_car','$brand_car','$model_car','$color_car','',$date_car,'','','$office_car','')"; 
mysql_query($sql) or die ("Select Ques error");
$ext = strtolower(end(explode('.', $attach_name)));
if ($ext == "jpg" or $ext == "jpeg" or $ext=="gif") 
{
	$sql="select max(id_car) from car";
	$result=mysql_query($sql) or die ("Select Ques error");
	$r=mysql_fetch_array($result);
	$id_max=$r[0];

	$filename=$id_max.".".$ext;
	copy($attach,"car_pic/$filename");
	

	$sql="update car set picture_car='$filename' where id_car='$id_max' ";
	mysql_query($sql) or die ("Select Ques error");
}

echo "<script>alert('Complete!!');window.location='add_car.php?id=$id';</script>";
mysql_close();
?>