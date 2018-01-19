<?php
session_start();
ob_start();
include "connect.php";
$_SESSION['loginPassword'] = $_POST['txtPassword'];
$_SESSION['check_office']=$_POST['check_office'];
mysql_query("SET NAMES TIS620");
?>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<?php
$id=$_POST['id'];
$pw_farm="123";
$pw_ho="456";

//echo $loginPassword;
//echo $check_office;
if (empty($check_office)||empty($loginPassword))
{
	echo "<script>alert('ไม่พบข้อมูล');history.back();<script>";
	exit();
}
if ($check_office=="farm")
{
	if($pw_farm!=$loginPassword) 
	{
	echo "<script>alert('รหัสผู้ดูแลไม่ถูกต้อง');history.back();</script>";
	exit();
	}
	else
	{
	$_SESSION['admin_car']="ผู้ดูแลระบบสำนักงานฟาร์ม";	
	header('Status: 301 Moved Permanently', false, 301); 
	header('Location: show_reserver.php?id=123');
	exit();
	}
}
if ($check_office=="ho")
{
	if($pw_ho!=$loginPassword) 
	{
	echo "<script>alert('รหัสผ่านผู้ดูแลไม่ถูกต้องครับ');history.back();</script>";
	exit();
	}
	else{
	$_SESSION['admin_car']="ผู้ดูแลระบบสำนักงานใหญ่";
	//$hello = "'Location: /show_reserver.php?id=".$id."'";
	//echo $hello;
	header('Status: 301 Moved Permanently', false, 301); 
	header('Location: show_reserver.php?id=456');
	exit();
	}
}	 ?>
