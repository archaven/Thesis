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
echo "<script>alert('��Ҵ����Ҿ�˭��Թ�');history.back();</script>";
	exit();
}
include "connect.php";
mysql_query("SET NAMES TIS620");
 $sql ="UPDATE driver_car SET name_driver='$name_driver',lastname_driver='$lastname_driver',position_driver='$position_driver',detail_driver='$detail_driver',office_driver='$office_driver' where id_driver='$id_driver'";
mysql_query($sql) or die ("Select Ques error");

$ext = strtolower(end(explode('.', $attach_name)));
if ($ext == "jpg" or $ext == "jpeg" or $ext=="gif") 
{
	$filename=$id_driver.".".$ext;
	echo "$filename";
	copy($attach,"attach/$filename");
	$sql="update driver_car set picture_driver='$filename' where id_driver='$id_driver' ";
	mysql_query($sql) or die ("Select Ques error");
}//else {echo "���Թ����������";}
echo "<script>alert('Complete!!');window.location='show_driver.php?id=$id';</script>";
mysql_close();
if (empty ($name_driver)||empty ($lastname_driver)||empty ($position_driver))
						{
		echo "<script>alert('��سҡ�͡���������ú');history.back();</script>";
		exit();
	} 
?>