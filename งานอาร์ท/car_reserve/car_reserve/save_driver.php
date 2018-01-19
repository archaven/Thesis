<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<? ob_start();
$id=$_POST['id'];
$name_driver=$_POST['name_driver'];
$lastname_driver=$_POST['lastname_driver'];
$position_driver=$_POST['position_driver'];
$detail_driver=$_POST['detail_driver'];
$office_driver=$_POST['office_driver'];
if (empty ($name_driver)||empty($position_driver)||empty($detail_driver))
	{
		echo "<script>alert('ใส่ข้อมูลให้ครบ');history.back();</script>";
		exit();
	}
$attach=$_FILES['attach']['tmp_name'];
$attach_name=$_FILES['attach']['name'];
$attach_size=$_FILES['attach']['size'];
$attach_type=$_FILES['attach']['type'];
if ($attach_size>2000000)
{
echo "<script>alert('ภาพขนาดใหญ่เกิน 2 MB');history.back();</script>";
	exit();
}
include "connect.php";mysql_query("SET NAMES TIS620");
$sql = "insert into driver_car values('','$office_driver','$name_driver','$lastname_driver','$position_driver','$detail_driver','')"; 
mysql_query($sql) or die ("Select Ques error1");
$ext = strtolower(end(explode('.', $attach_name)));
if ($ext == "jpg" or $ext == "jpeg" or $ext=="gif") 
{
	$sql="select max(id_driver) from driver_car";
	$result=mysql_query($sql) or die ("Select Ques error");
	$r=mysql_fetch_array($result);
	$id_max=$r[0];

	$filename=$id_max.".".$ext;
	copy($attach,"attach/$filename");
	

	$sql="update driver_car set picture_driver='$filename' where id_driver='$id_max' ";
	mysql_query($sql) or die ("Select Ques error");
}

echo "<script>alert('Complete!!');window.location='detail_driver.php?id=$id';</script>";
mysql_close();
?>