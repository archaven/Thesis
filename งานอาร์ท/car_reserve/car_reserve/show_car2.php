<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style4 {font-size: 16px}
.style6 {
	font-size: 22px;
	color: #FF0000;
	font-weight: bold;
}
-->
</style>
</head>

<body bgcolor="#E8E8E8">
<?
$farm_id_car=$_GET['farm_id_car'];
 include "../connect.php";
		    		    $sql="select * from car where farm_id_car='$farm_id_car'";
						$result=mysql_query($sql) or die ("ติดต่อฐานไม่ได้");
						$num=mysql_num_rows($result);
for($i=1;$i<=$num;$i++)
   {
           $row = mysql_fetch_array($result);
        	?>
	
   <table width="100%" border="0">
  <tr align="center">
    <td><img src='car_pic/<? echo $row['picture_car']; ?>'><br />
      <span class="style6"><? echo "เบอร์ $row[farm_id_car]"; ?></span><br />
      <span class="style4"><? echo "ยี่ห้อ <font color=green>$row[brand_car]</font>&nbsp;รุ่น <font color=green>$row[model_car]</font><br>ประเภทรถ&nbsp;<font color=green>$row[type_car]</font><br><font color=black>การใช้งาน&nbsp;</font><font color=green>$row[type_]</font>"; ?></span></td>
    </tr>
</table>

   <?
   }
?>
</body>
</html>