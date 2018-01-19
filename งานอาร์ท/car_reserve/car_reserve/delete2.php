<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<?
$id_reserver=$_GET['id_reserver'];
$id=$_GET['id'];

include('connect.php');
$sql = "delete from reserver_car where id_reserver='$id_reserver' ";
mysql_query($sql) or die("insert error");

echo "<script>alert('Complete!!');window.location='show_reserver.php?id=$id';</script>";

?>