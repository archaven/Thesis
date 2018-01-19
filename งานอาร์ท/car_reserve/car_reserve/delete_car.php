<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<?
$id_car=$_GET['id_car'];
$id=$_GET['id'];
include('connect.php');
$sql = "delete from car where id_car='$id_car' ";
mysql_query($sql) or die("insert error");

echo "<script>alert('Complete!!');window.location='show_reserver.php?id=$id';</script>";

?>