<? 
session_start(); 


$id=$_SESSION['id'];
include("../connect.php");
include("check.php");
$sql = "select * from member where id='$_GET[id]' ";
$query =mysql_query($sql) or die ("ติดต่อไม่ได้");
$row=mysql_fetch_array($query);
//echo "$row[level]";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<title>ข้อมูลการจองรถ</title><link rel="stylesheet" type="text/css" href="../lib/web.css">
<style type="text/css">
<!--
.style21 {color: #666666}
.style24 {color: #FFFFFF}
.style31 {color: #000033}
.style32 {color: #003399}
.style1 {color: #0066FF}
.style33 {color: #CC6600}
.norm {font-family: ms sans serif; font-size: 10pt; 
            background-color: #FFFFFF; color: #000000; }
.style22 {color: #FF0000;
	font-weight: bold;
}
.sunday {font-family: ms sans serif; font-size: 10pt; 
            background-color: #FF0000; color: #FFFFFF; }
.style35 {
	color: #CC3300;
	font-weight: bold;
	font-size: 18px;
}
.style36 {color: #006633}
.style37 {color: #FF6600}
.style38 {
	font-weight: bold;
	color: #0066FF;
}
.style40 {color: #333333}
.style41 {color: #CCCCCC}
.style42 {
	color: #003300;
	font-weight: bold;
}
-->
</style>
</head>
<body>      
<table width="800" border="0" align="center" cellpadding="0" cellspacing="0" class="square">
  <tr>
    <td><table width="100%" border="0">
      <tr>
        <td height="47" valign="top"><? include ("menu.php");?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><div align="center">
      <form id="form1" name="form1" method="post" action="admin.check.php">
            <p align="left"><? if ($_SESSION['admin_car']==''){ ?>
  <div align="left">
              <table width="381" border="0" align="center" cellpadding="5" cellspacing="0" class="square">
                <tr>
                  <td colspan="3" bgcolor="#84B54A"><span class="style1">เข้าสู่ระบบผู้ดูแล</span></td>
                </tr>
                <tr>
                  <td width="98"><div align="right"><span class="style2">สำนักงาน</span></div></td>
                  <td width="113"><label>
                    <input name="check_office" type="radio" value="ho" />
                    </label>
                  สำนักงานใหญ่ </td>
                  <td width="138"><label>
                    <input name="check_office" type="radio" value="farm" />
                    </label>
                  สำันักงานฟาร์ม</td>
                </tr>
                <tr>
                  <td><div align="right"><span class="style2">รหัสผ่าน</span></div></td>
                  <td colspan="2"><label>
                    <input name="password" type="password" id="password" />
                  </label></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td colspan="2"><label>
                    <input type="submit" name="Submit" value="เข้าสู่ระบบ" />
                    <input type="hidden" name="id" value="<?=$id?>" />
                  </label></td>
                </tr>
          </table>
  </div>
</form>
        </blockquote>
      </blockquote>
    </blockquote>
  </blockquote>
  <p align="left">
    <? } else {?>
</p>
<div align="left">
  <table width="800" border="0" align="left">
  <tr>
    <td height="117" valign="top"><p><span class="style33"><a href="show_reserver.php?id=<?=$id?>&show=">รายการวันนี้ </a>&nbsp;<span class="style37">|</span> &nbsp;<a href="show_reserver.php?id=<?=$id?>&show=30">รายการทั้งหมด</a> |<a href="show_reserver.php?texts=รอดำเนินงาน&amp;id=<?=$id?>&amp;show=30">รอดำเนินงาน</a> | <a href="show_reserver.php?texts=อนุมัติ&amp;id=<?=$id?>&amp;show=30">อนุมัติ</a> | <a href="show_reserver.php?texts=การบริการเสร็จสิ้น&amp;id=<?=$id?>&amp;show=30">การบริการเสร็จสิ้น</a> | <a href="add_car.php?id=<?=$id?>">เพิ่มรถใหม่</a>| <a href="show_car.php?id=<?=$id?>">ปรับปรุงรายการรถ</a> | <a href="add_driver.php?id=<?=$id?>">เพิ่มพนักงานขับรถ</a>| <a href="show_driver.php?id=<?=$id?>">ปรับปรุงรายการพนักงาน</a></span></p>
      <div align="center" class="style35"><br />
        <span class="style36"><? if ($show==''){?><img src="images/add.jpg" width="250" height="40" /><? }else{?></span><img src="images/addall.jpg" width="250" height="40" /><? } ?></div>
      <table width="100%" border="0" align="center" cellpadding="1" cellspacing="1" class="square2">
        <tr>
          <td width="37" bgcolor="#0099FF"><div align="center">เลขที่</div></td>
          <td width="79" bgcolor="#0099FF"><div align="center">วันขอบริการ</div></td>
          <td width="93" bgcolor="#0099FF"><div align="center">วันออกเดินทาง</div></td>
          <td width="137" bgcolor="#0099FF"><div align="center">รายการ</div></td>
          <td width="124" bgcolor="#0099FF"><div align="center">ผู้ขอ</div></td>
          <td width="59" bgcolor="#0099FF"><div align="center">สถาณะ</div></td>
          <td width="31" bgcolor="#FF88C4"><div align="center">รถ</div></td>
          <td width="92" bgcolor="#FF6600"><div align="center">พนักงานขับรถ</div></td>
          <td width="39" bgcolor="#0066FF"><div align="center"><span class="style24">รับเรื่อง</span></div>            <div align="center"></div>            <div align="center" class="style24"></div></td>
          <td width="29" bgcolor="#0033FF"><div align="center" class="style24">ปิด</div></td>
          <td width="38" bgcolor="#0033FF"><div align="center" class="style24">ลบ</div></td>
        </tr>
        <?
$dayz=$_GET['d'];
$monthz=$_GET['m'];
$yearz=$_GET['y'];
//$monthz=date("m"); //สร้างค่าเดือนปัจจุบัน
//$dayz=date("d"); //สร้างค่าย้อนหลังไป 5 วัน
//$yearz=date("Y"); //สร้างค่าปีปัจจุบัน
$thaiz = "$yearz-$monthz-$dayz";
include "../connect.php";
include "function_date.php";
if ($show!=''){$show=$_GET['show'];
$month=date("m"); 
$day=date("d")+$show; 
$year=date("Y"); 
$datead=mktime(22, 15, 10, $month, $day, $year); 
$datead=date("Y-m-d", $datead); 
} else {
$month=date("m"); 
$day=date("d"); 
$year=date("Y"); 
$datead=mktime(22, 15, 10, $month, $day, $year); 
$datead=date("Y-m-d", $datead); 
}
$month=date("m"); 
$day=date("d");
$year=date("Y"); 
$dateZ=mktime(22, 15, 10, $month, $day, $year); 
$dateQ=date("Y-m-d", $dateZ);
//$sql="select * from reserver_car where date_go_reserver  between '$dateQ' and '$datead' order by date_go_reserver asc";

if ($_GET['texts']!='')
{
$texts=$_GET['texts'];
$sql="select * from reserver_car where date_go_reserver  between '$dateQ' and '$datead' and name_approve='$texts' order by date_go_reserver asc";
}else{
$texts='';
$sql="select * from reserver_car where date_go_reserver  between '$dateQ' and '$datead'  order by date_go_reserver asc";
}

$query=mysql_query($sql) or die ("ติดต่อไม่ได้");
$num=mysql_num_rows($query);
if ($num==0){
?>
        <tr>
          <td colspan="11"><div align="center" class="style22"> ยังไม่มีรายการจองรถ </div></td>
        </tr>
        <?
}
for ($i=1;$i<=$num;$i++){	
$row=mysql_fetch_array($query); 
if ($row['name_approve']=="อนุมัติ"){$bg="#B7FFB7";}elseif($row['name_approve']=="การบริการเสร็จสิ้น"){$bg="#FFD7D7";}else{$bg="#FFD7D7";}
$time_go=substr($row[time_go_reserver],0,5);
$time_back=substr($row[time_back_reserver],0,5);
?>
        <tr>
          <td rowspan="2" valign="top" bgcolor="<?=$bg?>"><div align="center" class="style38"><? echo $row['id_reserver'];?></div></td>
          <td valign="top" bgcolor="<?=$bg?>"><div align="center" class="style1">
            <? 
			$date_reser=substr($row['date_reserver'],0,10);
			//echo "$date_reser";
			echo displaydate($date_reser);
			 ?></div></td>
          <td valign="top" bgcolor="<?=$bg?>"><div align="center"><span class="style42"><? echo displaydate($row['date_go_reserver']);?></span><span class="style38"><br />
          </span></div></td>
          <td rowspan="2" valign="top" bgcolor="<?=$bg?>"><span class="style21"> <a href="report_reserver.php?id_reserver=<?=$row['id_reserver']?>">
            <div align="left">
              <?=$row['detail_reserver']?> 
          </div>
          </a></td>
          <td rowspan="2" valign="top" bgcolor="<?=$bg?>"><div align="left"><span class="style21">
              <?=$row['id_name']?>
          </span></div></td>
          <td rowspan="2" valign="top" bgcolor="<?=$bg?>"><div align="center">
            <? if ($row['name_approve']=="อนุมัติ"){echo "<img src=images/gogo.gif width=75 height=30>";}
	  		elseif($row['name_approve']=="การบริการเสร็จสิ้น"){echo "<img src=images/ends.gif width=75 height=30>";}
			else{ echo  "<img src=images/end.gif width=75 height=30>";}?>
          </div></td>
          <td rowspan="2" valign="top" bgcolor="<?=$bg?>"><div align="center"><span class="style21">
            <? if ($row['farm_id_car']==0){echo "--";}else{echo "<a href=show_detail.php?farm_id_car=$row[farm_id_car]&check=car target=_blank>$row[farm_id_car]"; }?>
          </span></div></td>
          <td rowspan="2" valign="top" bgcolor="<?=$bg?>"><div align="center"><span class="style21">
            <?
$sqlQ="select * from driver_car where id_driver='$row[id_driver]'";
$queryQ=mysql_query($sqlQ) or die ("ติดต่อไม่ได้");
$rowQ=mysql_fetch_array($queryQ);
if ($row['id_driver']==0){echo "--";}else{echo "<a href=show_detail.php?id_driver=$row[id_driver]&check=driver target=_blank>$rowQ[name_driver]"; }?>
          </span></div></td>
          <td rowspan="2" bgcolor="#CCCCCC"><div align="center"><span class="style31"><a href="edit_reserver.php?id_reserver=<?=$row['id_reserver']?>&id=<?=$id?>"><img src="image/edit.gif" width="20" height="20" border="0" /><br />
          </a></span>
		  <a href="delete.php?id_reserver=<?=$row['id_reserver']?>&id=<?=$id?>"></a></div>
            <div align="left" class="style32">
              <div align="right"></div>
            </div>
            <div align="center"></div>            <div align="center"></div></td>
          <td rowspan="2" bgcolor="#CCCCCC"><div align="center"><a href="end_reserver.php?id_reserver=<?=$row['id_reserver']?>&id=<?=$id?>"><img src="image/folders.gif" width="20" height="20" border="0" /></a></div></td>
          <td rowspan="2" bgcolor="#CCCCCC"><div align="center"><a href="delete.php?id_reserver=<?=$row['id_reserver']?>&amp;id=<?=$id?>">[ลบ]</a><a href="end_report_reserver.php?id_reserver=<?=$row['id_reserver']?>"></a></div></td>
        </tr>
        <tr>
          <td valign="top" bgcolor="#EAF9FF"><div align="center"><strong><span class="style40"><? echo date("H:s", strtotime($row['date_reserver'])); ?></span></strong></div></td>
          <td valign="top" bgcolor="#D6F1FE"><div align="center"><strong><span class="style40"><? echo date("H:s", strtotime($row['time_go_reserver'])); ?></span></strong></div></td>
        </tr>
		   <tr>
		   
          <td colspan="11" bgcolor="#C5D1FC"><div align="center" class="style41"><strong>- - - - - - </strong><strong>- - - - - - </strong><strong>- - - - - - </strong><strong>- - - - - - </strong><strong>- - - - - - </strong><strong>- - - - - - </strong><strong>- - - - - - - - - - - - - - - - - - </strong><strong>- - - - - - - - - - - - </strong><strong>- - - - - - - - - - - -  - - - - - </strong></div></td>
        </tr>
        <? } ?>
      </table></td>
  </tr>
</table>
<? } ?></div></td>
  </tr>
  <tr>
    <td><div align="center"></div></td>
  </tr>
  <tr>
    <td><div align="center">
      <? include ("backdown.php");?>
    </div></td>
  </tr>
</table>
<p>&nbsp;</p>

<p><br />
</p>
</body>
</html>
