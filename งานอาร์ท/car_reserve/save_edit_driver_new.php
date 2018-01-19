<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<? ob_start();
$id=$_POST['id'];
$id_driver=$_POST['id_driver'];
$name_driver=$_POST['name_driver'];
$lastname_driver=$_POST['lastname_driver'];
$position_driver=$_POST['position_driver'];
$detail_driver=$_POST['detail_driver'];
$office_driver=$_POST['office_driver'];
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
if (empty ($name_driver)||empty ($lastname_driver)||empty ($position_driver)){
		echo "<script>alert('กรุณากรอกข้อมูลให้ครบ');history.back();</script>";
		exit();
}
mysql_query("SET NAMES TIS620");
$sql = "select * from driver_car where name_driver = \"" . $name_driver . "\" and lastname_driver = \"" . $lastname_driver . "\" and id_driver != \"" . $id_driver . "\"";
if ($result=mysql_query($sql)) {
 $rowcount=mysql_num_rows($result);
 if ($rowcount > 0) {
  // Dupplicated name_driver and lastname_driver
  mysql_free_result($result);
  echo "<script>alert('มีพนักขับที่มีชื่อ และ นามสกุลตรงกันอยู่แล้ว');history.back();</script>";
  exit();
 }
 mysql_free_result($result);
}
 $sql ="UPDATE driver_car SET name_driver='$name_driver',lastname_driver='$lastname_driver',position_driver='$position_driver',detail_driver='$detail_driver',office_driver='$office_driver' where id_driver='$id_driver'";
	//echo $sql;
 mysql_query($sql) or die ("Select Ques error");
 
 if (!empty($FILE['attach'])) {
	 $filename="driver-default.jpg";
	$ext = strtolower(end(explode('.', $attach_name)));
	if ($ext == "jpg" or $ext == "jpeg" or $ext=="gif" or $ext=="png") {
		$filename=$id_driver.".".$ext;
		//echo "$filename";
		copy($attach,"attach/$filename");
	}	
		$sql="update driver_car set picture_driver='$filename' where id_driver='$id_driver' ";
		mysql_query($sql) or die ("Select Ques error");
 }
//else {echo "ดำเนินการเสร็จสิ้น";}
echo "<script>alert('Complete!!');window.location='show_driver.php?id=$id';</script>";
mysql_close();

?>