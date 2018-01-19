<html>
<head>
<meta http-equiv="content-Type" content="text/html; charset=window-874"> 
<title>รายงานการรับเรื่อง</title>
<link rel="stylesheet" type="text/css" href="../lib/web.css">
</head>
<body>
<?
	include("function_date.php");
	include("connect.php");
	mysql_query("SET NAMES 'tis620'"); 

$id=$_POST['id'];
$id_reserver=$_POST['id_reserver'];

echo "00000 $id_reserver";

$company_reserver=$_POST['company_reserver'];
$detail_reserver=$_POST['detail_reserver'];
$stetus_go_reserver=$_POST['stetus_go_reserver'];
echo "ffffff $stetus_go_reserver";
$num_passenger_reserver=$_POST['num_passenger_reserver'];
$stetus_reserver=$_POST['stetus_reserver'];
$id_name=$_POST['id_name'];
$tel_reserver=$_POST['tel_reserver'];
$comment=$_POST['comment'];


$sql2 ="UPDATE reserver_car SET company_reserver='$company_reserver' ,  detail_reserver='$detail_reserver' ,  stetus_go_reserver='$stetus_go_reserver'  ,  num_passenger_reserver=$num_passenger_reserver ,  stetus_reserver='$stetus_reserver'  ,   id_name = '$id_name' ,  tel_reserver='$tel_reserver' , comment='$comment'  ,  name_approve='การบริการเสร็จสิ้น' where id_reserver='$id_reserver'";
mysql_query($sql2) or die ("Select Ques error");
	
?>
<script  language="javascript">
alert('ปิดงานเป็นที่เรียบร้อย');
window.open('show_reserver.php?id=<? echo $id; ?>' , '_self');
</script>
</body>
</html>