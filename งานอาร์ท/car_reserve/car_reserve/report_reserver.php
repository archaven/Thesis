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
.style30 {font-size: 24px}
.style41 {color: #000000}
.style42 {font-family: BrowalliaUPC; font-size: 18px; color: #000000; }
.style43 {font-size: 18px; color: #000000; }
.style45 {color: #666666; font-weight: bold; }
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
include "connect.php";
include "function_date.php";
$sql="select * from reserver_car  where id_reserver='$id_reserver'";
$query=mysql_query($sql) or die ("ติดต่อไม่ได้");
$num=mysql_num_rows($query);
$row=mysql_fetch_array($query);
    $time_go=substr($row[time_go_reserver],0,5);
	   $time_back=substr($row[time_back_reserver],0,5);
?>
        <td colspan="10" bgcolor="#FFFFFF"><div align="center"><span class="style8"><!-- LOGO<img src="../images/50y.gif" width="163" height="88" />--><br />
              <span class="style30">กลุ่มบริษัทฟาร์มโชคชัย</span></span></div></td>
        </tr>
      <tr>
        <td colspan="10" bgcolor="#FFFFFF"><div align="center"><img src="image/service.jpg" width="278" height="30" /></div></td>
        </tr>
      <tr>
        <td width="26%" align="center" valign="top" bgcolor="#FFFFFF"><div align="center"><span class="style29"><span class="style28">บริษัททำการ <span class="style24">
              <?=$row['company_reserver']?>
              </span></span></span></div></td>
        <td width="25%" align="center" valign="top" bgcolor="#FFFFFF"><div align="center" class="style28"><span class="style23">          เลขที่<span class="style24">&nbsp;<?=$row['id_reserver']?></span></span></div></td>
        <td colspan="8" align="center" valign="top" bgcolor="#FFFFFF"><div align="center" class="style28"><span class="style23">          ประเภท ยานพาหนะ </span></div></td>
        </tr>
      <tr>
        <td align="center" valign="top" bgcolor="#FFFFFF"><div align="center"><span class="style26"><span class="style28">ฝ่ายวิศวกรรม</span></span></div></td>
        <td colspan="9" align="center" valign="top" bgcolor="#FFFFFF"><span class="style26"><span class="style28">วันที่ <span class="style41">
          <? 
			$date_reser=substr($row['date_reserver'],0,10);
			//echo "$date_reser";
			echo displaydate($date_reser);
			 ?>
        </span></span></span></td>
        </tr>
      <tr height="30px">
        <td colspan="10" bgcolor="#FFFFFF"><span class="style26">          &nbsp;&nbsp;ผู้ขอบริการ ชื่อ-สกุล <span class="style45">
          <?=$row['id_name']?></span></span><span class="style26">          &nbsp;&nbsp;สังกัด&nbsp;<span class="style45">
          <?=$row['section']?></span></span></td>
        </tr>
      <tr>
        <td colspan="2" bgcolor="#CCCCCC"><div align="center" class="style26">รายการ</div></td>
        <td width="24%" bgcolor="#CCCCCC"><div align="center" class="style26">สถานที่</div></td>
        <td width="25%" colspan="7" bgcolor="#CCCCCC"><div align="center" class="style26">กำหนดการ</div></td>
        </tr>
      <tr>
        <td colspan="2" align="left" valign="top" bgcolor="#FFFFFF"><p class="style42">
          &nbsp;&nbsp;<?=$row['detail_reserver']." โดยมีผู้เดินทางจำนวน ".$row['num_passenger_reserver']." ได้แก่ ".$row['passenger_name_reserver']."&nbsp;ในวันที ".displaydate($row['date_go_reserver'])."เวลาออก $time_go น. เวลาเข้า $time_back น.&nbsp;จุดขึ้นรถ&nbsp;".$row['stetus_reserver']." เบอร์โทรติดต่อ".$row['tel_reserver'];?>
        </p>
          <p class="style42">&nbsp;</p>
          <p class="style42">&nbsp;</p>          </td>
        <td align="left" valign="top" bgcolor="#FFFFFF"><p class="style42">&nbsp;&nbsp;<?=$row['stetus_go_reserver']?>
        </p>
          <p class="style43">&nbsp;</p>
          <p class="style43">&nbsp;</p>          </td>
        <td colspan="7" align="left" valign="top" bgcolor="#FFFFFF"><p class="style42">&nbsp;&nbsp;วันที่ <? echo displaydate($row['date_go_reserver']);?><br /> 
            &nbsp;&nbsp;<? echo "$time_go ถึงเวลา $time_back";?></p>
          <p class="style43">&nbsp;</p>          </td>
        </tr>
      <tr>
        <td colspan="10" bgcolor="#CCCCCC"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="31%" bgcolor="#FFFFFF" class="style26"><div align="center">
              <p><br />
                ...............................<br />
                ผู้จัดทำ<br />
                .............................<br />
                ว/ด/ป</p>
              </div></td>
            <td width="39%" bgcolor="#FFFFFF" class="style26"><div align="center">
              <p><br />
                ...............................<br />
                ผู้จัดการฝ่ายผู้ขอบริการ
                <br />
                .............................<br />
                ว/ด/ป</p>
              </div></td>
            <td width="30%" bgcolor="#FFFFFF" class="style26"><div align="center">
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
        <td bgcolor="#FFFFFF"><div align="center"><span class="style26"><br />
  &nbsp;&nbsp;วันที่ <span class="style24"><? echo displaydate($row['date_go_reserver']);?></span></span></div></td>
        <td colspan="9" bgcolor="#FFFFFF"><span class="style26"><br />
          &nbsp;อนุญาตให้&nbsp;<span class="style24">
          <strong>
          <?=$row['id_name']?>
          </strong></span><strong>&nbsp;&nbsp;</strong>นำรถหมายเลข&nbsp;</span><span class="style45"><? echo $row[farm_id_car]; ?></span><span class="style26">&nbsp;&nbsp;โดยมี&nbsp;
		  </span>
          
          <span class="style45">
          <?
		     $sqlQ="select * from driver_car where id_driver=$row[id_driver]";
             $queryQ=mysql_query($sqlQ) or die ("ติดต่อไม่ได้");
             $rowQ=mysql_fetch_array($queryQ);
     	     echo "$rowQ[name_driver] $rowQ[lastname_driver]"; ?></span><span class="style26">&nbsp;พนักงานขับรถ<br />
&nbsp;ออกนอกบริเวณฟาร์มได้</span></td>
        </tr>
      <tr>
        <td colspan="10" bgcolor="#FFFFFF"><span class="style26"><br />
          &nbsp;&nbsp;เพื่อ <span class="style24">
          <span class="style41">
          <?=$row['detail_reserver']?></span></span></span></td>
        </tr>
      <tr>
        <td colspan="2" bgcolor="#FFFFFF"><span class="style26"><br />
          &nbsp;&nbsp;เวลาออก...................................</span></td>
        <td colspan="8" bgcolor="#FFFFFF"><span class="style26"><br />
          &nbsp;&nbsp;เวลาเข้า...................................</span></td>
        </tr>
      <tr>
        <td colspan="10" bgcolor="#FFFFFF"><span class="style21"> &nbsp;&nbsp;บันทึกการตรวจเช็คเบื้องต้น</span></td>
      </tr>
      <tr>
        <td colspan="10" bgcolor="#FFFFFF"><table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td class="style27"><label>
              <div align="right">
                <input type="checkbox" name="checkbox" value="checkbox" />
                </div>
            </label></td>
            <td class="style27"><span class="style23">น้ำมันเครื่อง</span></td>
            <td class="style27"><div align="right">
              <input type="checkbox" name="checkbox6" value="checkbox" />
            </div></td>
            <td class="style27"><span class="style23">น้ำมันเบรค</span></td>
          </tr>
          <tr>
            <td class="style27"><div align="right">
              <input type="checkbox" name="checkbox2" value="checkbox" />
            </div></td>
            <td class="style27"><span class="style23">น้ำมันคลัช</span></td>
            <td class="style27"><div align="right">
              <input type="checkbox" name="checkbox7" value="checkbox" />
            </div></td>
            <td class="style27"><span class="style23">น้ำมันพวงมาลัยเพาเวอร์</span></td>
          </tr>
          <tr>
            <td class="style27"><div align="right">
              <input type="checkbox" name="checkbox3" value="checkbox" />
            </div></td>
            <td class="style27"><span class="style23">เช็คน้ำกลั่นในแบตเตอรี่</span></td>
            <td class="style27"><div align="right">
              <input type="checkbox" name="checkbox8" value="checkbox" />
            </div></td>
            <td class="style27"><span class="style23">น้ำมันในหม้อน้ำ/หม้อพักน้ำ</span></td>
          </tr>
          <tr>
            <td class="style27"><div align="right">
              <input type="checkbox" name="checkbox4" value="checkbox" />
            </div></td>
            <td class="style27"><span class="style23">สัญญาณไฟต่างๆ</span></td>
            <td class="style27"><div align="right">
              <input type="checkbox" name="checkbox9" value="checkbox" />
            </div></td>
            <td class="style27"><span class="style23">สภาพยาง/ลมยาง</span></td>
          </tr>
          <tr>
            <td width="200" class="style27"><div align="right">
              <input type="checkbox" name="checkbox5" value="checkbox" />
            </div></td>
            <td width="200" class="style27"><span class="style23">การทำงานของคลัช/เบรก</span></td>
            <td width="120" class="style27"><div align="right">
              <input type="checkbox" name="checkbox10" value="checkbox" />
            </div></td>
            <td width="276" class="style27"><span class="style23">น้ำมันเชื้อเพลิง</span></td>
          </tr>
          
        </table></td>
        </tr>
      <tr>
        <td colspan="10" bgcolor="#FFFFFF"><table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td bgcolor="#FFFFFF" class="style26"><div align="center">
              <p><br />
              </p>
              <p><br />
                .........................................<br />
                ผู้อนุญาต<br />
                ...............................<br />
                ว/ด/ป</p>
              <p><br />
              </p>
            </div></td>
            <td bgcolor="#FFFFFF" class="style26"><div align="center">
              <p><br /></p>
              <p><br />
                .........................................<br />
                พนักงานขับรถ<br />
                ...............................<br />
                ว/ด/ป</p>
              <p><br />
              </p>
            </div></td>
            <td bgcolor="#FFFFFF" class="style26"><div align="center">
              <p><br /></p>
              <p><br />
                .........................................<br />
                เจ้าหน้าที่รักษาความปลอดภัย<br />
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
