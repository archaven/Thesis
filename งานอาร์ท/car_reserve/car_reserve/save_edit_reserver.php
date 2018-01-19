<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<? ob_start();
$id=$_POST['id'];
$id_reserver=$_POST['id_reserver'];
$farm_id_car=$_POST['farm_id_car'];
$id_driver=$_POST['id_driver'];
$name_approve=$_POST['name_approve'];
$save_date="now()";

//echo "$id_reserver--$id_car--$id_driver--$name_approve";
include "connect.php";
mysql_query("SET NAMES TIS620");
 $sql ="UPDATE reserver_car SET farm_id_car='$farm_id_car',id_driver='$id_driver',name_approve='$name_approve',save_date=$save_date where id_reserver='$id_reserver'";
mysql_query($sql) or die ("Select Ques error");
echo "<script>alert('Complete!!');window.location='show_reserver.php?id=$id';</script>";
mysql_close();
?>