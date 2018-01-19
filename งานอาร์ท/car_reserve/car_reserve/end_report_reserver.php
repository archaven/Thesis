<? session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<title>รายงานการจอง</title><link rel="stylesheet" type="text/css" href="../lib/web.css">
<style type="text/css">
<!--
.style8 {
	font-family: BrowalliaUPC;
	font-size: 36px;
	font-weight: bold;
}
.style14 {
	font-family: BrowalliaUPC;
	font-size: 24px;
	color: #000000;
	font-weight: bold;
}
.style21 {font-family: BrowalliaUPC; font-size: 18px; font-weight: bold; }
.style23 {font-family: BrowalliaUPC}
.style24 {color: #666666}
.style26 {font-family: BrowalliaUPC; font-size: 18px; }
.style27 {font-size: 18px; }
.style28 {
	font-size: 22px;
	font-weight: bold;
}
.style29 {font-family: BrowalliaUPC; font-size: 24px; }
.style11 {font-size: 12px}
.style30 {color: #990000}
.style32 {font-size: 12px; color: #006600; }
.style33 {color: #000000}
.style35 {color: #666666; font-weight: bold; }
.style31 {color: #000033}
-->
</style>
</head>
   <body>
<table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#CCCCCC"><table width="100%" border="1" cellpadding="0" cellspacing="0">
      <tr>
<? 
$dayz=$_GET['d'];
$monthz=$_GET['m'];
$yearz=$_GET['y'];
$thaiz = "$yearz-$monthz-$dayz";
include "../connect.php";
//include("../jobree/check.php");
include "function_date.php";
$sql="select * from reserver_car  where id_reserver='$id_reserver'";
$query=mysql_query($sql) or die ("ติดต่อไม่ได้");
$num=mysql_num_rows($query);
$row=mysql_fetch_array($query);
    $time_go=substr($row[time_go_reserver],0,5);
	   $time_back=substr($row[time_back_reserver],0,5);
?>
        <td colspan="10" bgcolor="#FFFFFF"><div align="center"><span class="style8"><img src="../images/50y.gif" width="190" height="103" /><br />
          กลุ่มบริษัทฟาร์มโชคชัย</span></div></td>
        </tr>
      <tr>
        <td colspan="10" bgcolor="#FFFFFF"><div align="center"><img src="image/service.jpg" width="278" height="30" /></div></td>
        </tr>
      <tr>
        <td width="26%" align="center" valign="top" bgcolor="#FFFFFF"><div align="center"><span class="style29"><span class="style28">บริษัททำการ <span class="style24">
              <?=$row['company_reserver']?>
              </span></span></span></div></td>
        <td width="25%" align="center" valign="top" bgcolor="#FFFFFF"><div align="center" class="style28"><span class="style23">          เลขที่<span class="style24">&nbsp;0<?=$row['id_reserver']?>
          /53
          </span></span></div></td>
        <td colspan="8" align="center" valign="top" bgcolor="#FFFFFF"><div align="center" class="style28"><span class="style23">          ประเภท ยานพาหนะ </span></div></td>
        </tr>
      <tr>
        <td align="center" valign="top" bgcolor="#FFFFFF"><div align="center"><span class="style26"><span class="style28">ฝ่ายวิศวกรรม</span></span></div></td>
        <td colspan="9" align="center" valign="top" bgcolor="#FFFFFF"><span class="style26"><span class="style28">วันที่ <span class="style33">
          <? 
			$date_reser=substr($row['date_reserver'],0,10);
			//echo "$date_reser";
			echo displaydate($date_reser);
			 ?>
        </span></span></span></td>
        </tr>
      <tr>
        <td colspan="10" bgcolor="#FFFFFF"><span class="style26">          &nbsp;&nbsp;ผู้ขอบริการ ชื่อ-สกุล <span class="style24">
          <?=$row['id_name']?>
          </span></span><span class="style26">          &nbsp;&nbsp;ฝ่าย<span class="style24">
          <?=$row['section']
?>
          </span> &nbsp;แผนก<span class="style24">
          <?=$row['department']?>
          </span>&nbsp;&nbsp;หน่วย<span class="style24">
          <?=$row['unit']
?>
          </span>&nbsp;</span></td>
        </tr>
      <tr>
        <td colspan="2" bgcolor="#CCCCCC"><div align="center" class="style26">รายการ</div></td>
        <td width="24%" bgcolor="#CCCCCC"><div align="center" class="style26">สถานที่</div></td>
        <td width="25%" colspan="7" bgcolor="#CCCCCC"><div align="center" class="style26">กำหนดการ</div></td>
        </tr>
      <tr>
        <td colspan="2" align="left" valign="top" bgcolor="#FFFFFF"><p class="style26"><span class="style24">
          &nbsp;
          <?=$row['detail_reserver']." โดยมีผู้เดินทางจำนวน ".$row['num_passenger_reserver']." ได้แก่ ".$row['passenger_name_reserver']."&nbsp;ในวันที ".displaydate($row['date_go_reserver'])."เวลาออก $time_go น. เวลาเข้า $time_back น.&nbsp;จุดขึ้นรถ&nbsp;".$row['stetus_reserver']." เบอร์โทรติดต่อ".$row['tel_reserver'];?>
        </span></p>
          <p class="style26">&nbsp;</p>
          <p class="style26">&nbsp;</p>
          <p class="style26">&nbsp;</p>
          </td>
        <td align="left" valign="top" bgcolor="#FFFFFF"><p class="style26"><span class="style24">
           &nbsp;
           <?=$row['stetus_go_reserver']?>
        </span></p>
          <p class="style27">&nbsp;</p>
          <p class="style27">&nbsp;</p>
          <p class="style27">&nbsp;</p>
          </td>
        <td colspan="7" align="left" valign="top" bgcolor="#FFFFFF"><p class="style26"><span class="style24">&nbsp;<? echo displaydate($row['date_reserver']);?><br /> 
          <? echo "$time_go ถึงเวลา $time_back";?></span></p>
          <p class="style27">&nbsp;</p>
          <p class="style27">&nbsp;</p>
          <p class="style27">&nbsp;</p>
          </td>
        </tr>
      <tr>
        <td colspan="10" bgcolor="#CCCCCC"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="31%" bgcolor="#FFFFFF" class="style26"><div align="center">
              <p><br />
                </p>
              <p>&nbsp;</p>
              <p><br />
                ...............................<br />
                ผู้จัดทำ<br />
                .............................<br />
                ว/ด/ป</p>
            </div></td>
            <td width="39%" bgcolor="#FFFFFF" class="style26"><div align="center">
              <p><br />
                </p>
              <p>&nbsp;</p>
              <p><br />
                ...............................<br />
                ผู้จัดการฝ่ายผู้ขอบริการ
                <br />
                .............................<br />
                ว/ด/ป</p>
            </div></td>
            <td width="30%" bgcolor="#FFFFFF" class="style26"><div align="center">
              <p><br />
                </p>
              <p>&nbsp;</p>
              <p><br />
                ...............................<br />
                ชื่อผู้ให้บริการ<br />
                .............................<br />
                ว/ด/ป</p>
            </div></td>
          </tr>
        </table></td>
        </tr>
      <tr>
        <td colspan="10" bgcolor="#FFFFFF"><div align="center" class="style14"><img src="image/anuyad.jpg" width="278" height="30" /></div></td>
        </tr>
      <tr>
        <td bgcolor="#FFFFFF"><span class="style26"><br />
          &nbsp;&nbsp;วันที่ <span class="style24"><? echo displaydate($row['date_go_reserver']);?></span></span></td>
        <td colspan="9" bgcolor="#FFFFFF"><span class="style26"><br />
          &nbsp;อนุญาตให้&nbsp;<span class="style24">
          <strong>
          <span class="style33">
          <?=$row['id_name']?>
          </span></strong></span><span class="style33"><strong>&nbsp;</strong>&nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;นำรถหมายเลข <span class="style35">
          <span class="style33">
          <?=$row['farm_id_car']?>
          </span></span><span class="style33"><strong>&nbsp;</strong></span>ออกนอกบริเวณฟาร์มได้</span></td>
        </tr>
      <tr>
        <td colspan="10" bgcolor="#FFFFFF"><span class="style26"><br />
          &nbsp;&nbsp;เพื่อ <span class="style24">
          <?=$row['detail_reserver']?>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>ตามคำสั่ง......................................</span></td>
        </tr>
      <tr>
        <td colspan="2" bgcolor="#FFFFFF"><span class="style26"><br />
          &nbsp;&nbsp;เวลาออก<span class="style24"> <? echo dateThai($row['check_time_go']);
?></span></span></td>
        <td colspan="8" bgcolor="#FFFFFF"><span class="style26"><br />
          &nbsp;&nbsp;เวลาเข้า <span class="style24"><? echo dateThai($row['check_time_back']);?></span></span></td>
        </tr>
      <tr>
        <td colspan="2" bgcolor="#FFFFFF"><span class="style26"><br />
          &nbsp;&nbsp;เลขไมล์ก่อนออกจากฟาร์ม <span class="style24">
          <?=number_format($row['num_kilo_go_reserver'])?> กิโลเมตร </span></span></td>
        <td colspan="8" bgcolor="#FFFFFF"><span class="style26"><br />
          &nbsp;&nbsp;เลขไมล์กลับเข้าฟาร์ม<span class="style24">
          <?=number_format($row['num_kilo_back_reserver'])?>
          กิโลเมตร </span></span></td>
        </tr>
      <tr>
        <td colspan="10" bgcolor="#FFFFFF"><span class="style21"> &nbsp;&nbsp;สรุปผลการเดินทาง</span></td>
        </tr>
      <tr>
        <td colspan="10" bgcolor="#FFFFFF"><table width="100%" border="0" cellpadding="1" cellspacing="5">
          
          <tr>
            <td width="158" bgcolor="#EBEBEB" class="style27"><div align="right"><strong><span class="style11">รถออกจากฟาร์มเวลา&nbsp;</span></strong></div></td>
            <td width="240" class="style27"><span class="style11">
              <? echo dateThai($row['check_time_go']);?>
            </span></td>
            <td width="184" bgcolor="#EBEBEB" class="style27"><div align="right"><strong><span class="style11">รถกลับเข้าฟาร์มเวลา</span></strong></div></td>
            <td width="214" class="style27"><span class="style11">
              <? if ($row['date_end']=="0000-00-00 00:00:00"){echo "0000-00-00 00:00:00";}else{ echo dateThai($row['check_time_back']);}?>
            </span></td>
          </tr>
          <tr>
            <td bgcolor="#EBEBEB" class="style27"><div align="right"><strong><span class="style11">ระยะทางก่อนออกจากฟาร์ม</span></strong></div></td>
            <td class="style27"><span class="style32">
              <?=number_format($row['num_kilo_go_reserver'])?>
              <span class="style33">&nbsp;กิโลเมตร</span></span></td>
            <td bgcolor="#EBEBEB" class="style27"><div align="right"><strong><span class="style11">ระยะทางเืมื่อกลับเข้าฟาร์ม</span></strong></div></td>
            <td class="style27"><span class="style32">
              <? $num_kilo_back_reserver=number_format($row['num_kilo_back_reserver']);
			  		echo "$num_kilo_back_reserver"; ?>
&nbsp;              <span class="style33">กิโลเมตร</span></span></td>
          </tr>
          <tr>
            <td class="style27"><div align="center"></div></td>
            <td colspan="3" class="style27"><span class="style11"><strong>รวมระยะทางที่ใช้ในการเดินทางทั้งหมด</strong> &nbsp;::<span class="style31">
              <? 
$sum_kilo_reserver=number_format($row['sum_kilo_reserver']);
echo "$sum_kilo_reserver"; 
	    ?>
            </span><span class="style31">กิโลเมตร</span></span></td>
            </tr>
          <tr>
            <td class="style27"><div align="left"></div></td>
            <td colspan="3" class="style27"><span class="style11"><strong>เวลาที่ใช้ในการเดินทาง</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;::<span class="style30">
              <?
	echo "$row[sum_time_reserver]";	
		?>
              <?
//$time_x="$time[D] วัน $time[H] ชั่วโมง $time[M]นาที $time[S]วินาที";		
//$sql3="UPDATE reserver_car SET sum_time_reserver='$time_x' where id_reserver=$id_reserver";
//$query3=mysql_query($sql3) or die ("Select Ques error");	
		?>
            </span></span></td>
            </tr>
          
        </table></td>
        </tr>
      <tr>
        <td colspan="10" bgcolor="#FFFFFF"><table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td bgcolor="#FFFFFF" class="style26"><div align="center">
              <p><br />
                </p>
              <p>&nbsp;</p>
              <p><br />
                .........................................<br />
                พนักงานขับรถ<br />
                ...............................<br />
                ว/ด/ป</p>
              <p><br />
              </p>
            </div></td>
            <td bgcolor="#FFFFFF" class="style26"><div align="center">
              <p><br />
                </p>
              <p>&nbsp;</p>
              <p><br />
                .........................................<br />
                เจ้าหน้าที่รักษาความปลอดภัย<br />
                ...............................<br />
                ว/ด/ป</p>
              <p><br />
              </p>
            </div></td>
            <td bgcolor="#FFFFFF" class="style26"><div align="center">
              <p><br />
                </p>
              <p>&nbsp;</p>
              <p><br />
                .........................................<br />
                ผู้อนุญาต
                <br />
                ...............................<br />
                ว/ด/ป</p>
              <p><br />
              </p>
            </div></td>
            </tr>
        </table></td>
        </tr>
      
    </table></td>
  </tr>
</table>
</body>
</html>
