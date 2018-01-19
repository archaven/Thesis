<?
$id=$_GET['id'];
include "connect.php";
include "function_date.php";
$id=$_GET['id'];
$day1=$_GET['d'];
$month1=$_GET['m'];
$year1=$_GET['y'];
$monthz=date("m"); 
$dayz=date("d"); 
$yearz=date("Y"); 
$thaiz ="$yearz-$monthz-$dayz";//;วันนี้
$thai2 ="$year1-$month1-$day1";//;วันที่เลือก
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<title>ข้อมูลการจองรถ</title><link rel="stylesheet" type="text/css" href="../lib/web.css">
<style type="text/css">
  .today  { font-family: ms sans serif; font-size: 10pt; 
            font-weight: bold; background-color: #ff6633; 
            color: #FFFFFF; border: 3 double #000000; }
  .sunday { font-family: ms sans serif; font-size: 10pt; 
            background-color: #FF0000; color: #FFFFFF; }
  .norm   { font-family: ms sans serif; font-size: 10pt; 
            background-color: #FFFFFF; color: #000000; }
.style21 {color: #666666}
.style22 {color: #FF0000;
	font-weight: bold;
}
.style30 {color: #0033FF; font-weight: bold; font-size: 14px; }
.style33 {color: #006600}
.style36 {color: #CC6600}
.style37 {color: #0066FF}
.style38 {	font-weight: bold;
	color: #0066FF;
}
.style40 {color: #333333}
.style42 {color: #CCCCCC; font-weight: bold; }
.style43 {color: #000000; }
</style></head>
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
      <table width="800" height="128" border="1" align="center" bordercolor="black">
        <tr class="norm">
          <td colspan="7" align="center" bgcolor="#0066FF"><a href="<?php echo $PHP_SELF; ?>">
          <?php
/* $diffHour และ $diffMinute คือตัวแปรที่ใช้เก็บจำนวนชั่วโมงและจำนวนนาทีที่
   แตกต่างกันระหว่างเครื่องไคลเอนต์กับเครื่องเซิร์ฟเวอร์ ตามลำดับ เช่นถ้าเวลาของ
   เครื่องไคลเอ็นต์เร็วกว่าเวลาของเครื่องเซิร์ฟเวอร์ 11 ชั่วโมง 15 นาที ก็ให้กำหนด 
   $diffHour เป็น 11 และกำหนด $diffMinute เป็น 15 ในที่นี้ผู้เขียนถือว่า
   เครื่องเซิร์ฟเวอร์กับเครื่องไคลเอ็นต์มีเวลาตรงกัน */
$diffHour = 0;
$diffMinute = 0;

if ($dfMonth == "") {
  /* ถ้าไม่มีการระบุให้แสดงปฏิทินของเดือนใดเดือนหนึ่ง เราจะแสดงปฏิทินของเดือน
     ปัจจุบันตามเวลาในเครื่องไคลเอ็นต์ โดยใช้ฟังก์ชั่น getdate() สร้างวันที่/เวลา
     ปัจจุบันของเครื่องไคลเอ็นต์เก็บไว้ในตัวแปร $calTime ซึ่งฟังก์ชั่นนี้จะคืนค่ากลับมา
     เป็นอาร์เรย์ */
  $calTime = getdate(date(mktime(date("H") + $diffHour, 
    date("i") + $diffMinute)));
  $today = $calTime["mday"];     //วันที่
  $month = $calTime["mon"];      //เดือน
  $year = $calTime["year"];      //ปี
}
else {
  /* กรณีที่ระบุให้แสดงปฏิทินของเดือน/ปีหนึ่งๆนั้น จะมีการส่งตัวแปร $today, 
     $dfMonth และ $dfYear ผ่านมาทาง query string ด้วย */
  if ($dfMonth == 0) {
    /* ถ้าตัวแปร $dfMonth เป็น 0 เราจะแสดงปฏิทินของเดือนธันวาคมของปีที่น้อย
       กว่าปีที่กำลังแสดงอยู่ */
    $dfMonth = 12;
    $dfYear = $dfYear - 1;
  }
  elseif ($dfMonth == 13) {
    /* ถ้าตัวแปร $dfMonth เป็น 13 เราจะแสดงปฏิทินของเดือนมกราคมของปีที่มาก
       กว่าปีที่กำลังแสดงอยู่ */
    $dfMonth = 1;
    $dfYear = $dfYear + 1;
  }
  //สร้างวัน/เวลาของเดือนและปีที่ผู้ใช้ระบุ เก็บไว้ในตัวแปร $calTime
  $calTime = getdate(date(mktime((date("H") + $diffHour), 
    (date("i") + $diffMinute), 0, $dfMonth, $today, $dfYear)));
  $today = $calTime["mday"];     //วันที่
  $month = $calTime["mon"];      //เดือน
  $year = $calTime["year"];      //ปี
}

/* เรียกฟังก์ชั่น LastDay() ซึ่งเป็นฟังก์ชั่นที่เราสร้างขึ้นมาเอง เพื่อหา "จำนวนวัน" 
   ของเดือนและปีที่จะแสดงปฏิทิน โดยเก็บไว้ในตัวแปร $Lday */
$Lday = LastDay($month, $year);
//เก็บ timestamp ของวันที่ 1 ของเดือนที่จะแสดงปฏิทิน ไว้ในตัวแปร $FTime
$FTime = getdate(date(mktime(0, 0, 0, $month, 1, $year)));
//เก็บ "วันในสัปดาห์" (จันทร์, อังคาร ฯลฯ) ของวันที่ 1 ของเดือนไว้ในตัวแปร $wday
$wday = $FTime["wday"];

//สร้างตัวแปรชนิดอาร์เรย์เก็บชื่อเดือนภาษาไทย
$thmonthname = array("มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", 
  "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", 
  "พฤศจิกายน", "ธันวาคม");

/* ฟังก์ชั่น LastDay() ใช้สำหรับหาวันที่สุดท้ายของเดือน/ปีที่ระบุ 
   หรือกล่าวอีกนัยหนึ่งคือหาว่าเดือน/ปีที่ระบุนั้นมีกี่วัน */
function LastDay($m, $y) {
  for ($i=29; $i<=32; $i++) {
    if (checkdate($m, $i, $y) == 0) {
      return $i - 1;
    }
  }
}
?>
          </a><img src="image/day_go.jpg" width="400" height="50" /></td>
        </tr>
        <tr class="norm">
          <td width="65" align="center"><a href="<?php echo $PHP_SELF; ?>
?today=<?php echo $today; ?>
&amp;dfMonth=<?php echo ($month - 1) ?>
&amp;dfYear=<? echo $year; ?>&id=<?=$id?>">&lt;</a> </td>
          <td align="center" colspan="5" bgcolor="#CEE1FF"><?php echo $thmonthname[$month - 1]; ?>&nbsp; <?php echo ($year + 543); ?></td>
          <td width="63" align="center"><a href="<?php echo $PHP_SELF; ?>
?today=<?php echo $today; ?>&amp;dfMonth=<?php echo ($month + 1); ?>
&amp;dfYear=<?php echo $year; ?>&id=<?=$id?>">&gt;</a></td>
        </tr>
        <tr>
          <td width="65" align="center" class="sunday">อาทิตย์</td>
          <td width="56" align="center" class="norm">จันทร์</td>
          <td width="54" align="center" class="norm">อังคาร</td>
          <td width="57" align="center" class="norm">พุธ</td>
          <td width="67" align="center" class="norm">พฤหัสบดี</td>
          <td width="60" align="center" class="norm">ศุกร์</td>
          <td width="63" align="center" class="norm">เสาร์</td>
        </tr>
        <?php
$iday = 1;
//แสดงแถวแรกของปฏิทิน
for ($i=0; $i<=6; $i++) {
  if ($i < $wday) {  //แสดงเซลล์ว่างก่อนวันที่ 1 ของเดือน
    if ($i == 0) {     //กรณีที่เป็นวันอาทิตย์
      echo "<td width=\"24\" align=\"center\" class=\"sunday\">&nbsp;</td>\n";
    }
    else {             //กรณีที่เป็นวันอื่นๆที่ไม่ใช่วันอาทิตย์
      echo "<td width=\"24\" align=\"center\" class=\"norm\">&nbsp;</td>\n";
    }
  }
  else {             //แสดงวันที่ในแถวแรกของปฏิทิน
    if ($i == 0 && ($iday != $today)) { 
      //กรณีที่เป็นวันอาทิตย์ และไม่ใช่วันปัจจุบัน
      echo "<td width=\"24\" align=\"center\" class=\"sunday\"><a href=s_show_reserver.php?d=$iday&m=$month&y=$year&id=$id>$iday<a></td>\n";
    }
    elseif ($iday == $today) {  //กรณีที่เป็นวันปัจจุบัน
      echo "<td width=\"24\" align=\"center\" class=\"today\"><a href=s_show_reserver.php?d=$iday&m=$month&y=$year&id=$id>$iday<a></td>\n";
    }
    else {
      echo "<td width=\"24\" align=\"center\" class=\"norm\"><a href=s_show_reserver.php?d=$iday&m=$month&y=$year&id=$id>$iday<a></td>\n";
    }
    $iday++;
  }
}

//แสดงแถวที่เหลือของปฏิทิน (หลังจากแสดงแถวแรกไปแล้ว จะเหลืออย่างมาก 5 แถว)
for ($j=0; $j<=4; $j++) {
  if ($iday <= $Lday) {
    echo "<tr>\n";
    for ($i=0; $i<=6; $i++) {
      if ($iday <= $Lday) {
        if ($i == 0 && ($iday != $today)) {
          echo "<td width=\"24\" align=\"center\" class=\"sunday\"><a href=s_show_reserver.php?d=$iday&m=$month&y=$year&id=$id>$iday<a></td>\n";
        }
        elseif ($i == 0 && ($iday == $today)) {
          echo "<td width=\"24\" align=\"center\" class=\"today\"><a href=s_show_reserver.php?d=$iday&m=$month&y=$year&id=$id>$iday<a></td>\n";
        }
        elseif ($iday == $today) {
          echo "<td width=\"24\" align=\"center\" class=\"today\"><a href=s_show_reserver.php?d=$iday&m=$month&y=$year&id=$id>$iday<a></td>\n";
        }
        else {
          echo "<td width=\"24\" align=\"center\" class=\"norm\"><a href=s_show_reserver.php?d=$iday&m=$month&y=$year&id=$id>$iday<a></td>\n";
        }
        $iday++;
      }
      else {
        echo "<td width=\"24\" align=\"center\" class=\"norm\">&nbsp;</td>\n";
      }
    }
    echo "</tr>\n";
  }
  else {
    break;
  }
}
?>
        <tr class="norm">
          <td height="20" colspan="7" align="center"><a href="<?php echo $PHP_SELF; ?>&id=<?=$id?>">            วันที่ปัจจุบัน</a></td>
        </tr>
      </table>
    </div></td>
  </tr>
  <tr>
    <td><div align="center">
      <table width="800" border="0" align="center" cellpadding="1" cellspacing="1" class="square">
        <tr>
          <td colspan="11" bgcolor="#BBDDFF"><span class="style30">รายการรถขอบริการ <span class="style33">[ วันที่
            <? if ($thai2=='--')
	  { echo displaydate($thaiz);
	  }else { echo displaydate($thai2); }?>
            ]</span></span>
            <div align="center">
            <span class="style22"><span class="style34"><a href="add_reserver.php?d=<?=$dayz?>&m=<?=$monthz?>&y=<?=$yearz?>&id=<?=$id?>"><a href="add_reserver.php?d=<?=$day1?>&m=<?=$month1?>&y=<?=$year1?>&id=<?=$id?>"></a></td>
          </tr>
        <tr>
          <td width="34" bgcolor="#FFEBD7"><div align="center"><strong>เลขที่</strong></div></td>
          <td width="73" bgcolor="#FFEBD7"><div align="center"><strong>วันขอ</strong></div></td>
          <td width="85" bgcolor="#FFEBD7"><div align="center"><strong>วันออกเดินทาง</strong></div></td>
          <td width="116" bgcolor="#FFEBD7"><div align="center"><strong>รายการ</strong></div></td>
          <td width="45" bgcolor="#009933"><div align="center"><strong>รถ</strong></div></td>
          <td width="72" bgcolor="#FFEBD7"><div align="center"><strong>พขร.</strong></div></td>
          <td width="70" bgcolor="#FFEBD7"><strong>ผู้จอง</strong></td>
          <td width="100" bgcolor="#FFEBD7"><div align="center"><strong>สถาณะ</strong></div></td>
          <td width="56" bgcolor="#FFEBD7"><div align="center"><strong>รับเรื่อง
          </strong></div></td>
          <td width="50" bgcolor="#FFEBD7"><div align="center"><strong>ปิดงาน</strong></div></td>
          <td width="63" bgcolor="#FFEBD7"><div align="center"><strong>ลบ</strong></div></td>
        </tr>
        <?
if ($thai2=='--'){
$sql="select * from reserver_car where date_go_reserver='$thaiz' order by date_go_reserver asc";
}else{
$sql="select * from reserver_car where date_go_reserver='$thai2' order by date_go_reserver asc";
} 
$query=mysql_query($sql) or die ("ติดต่อไม่ได้");
$num=mysql_num_rows($query);
if ($num==0){
?>
        <tr>
          <td colspan="11"><div align="center" class="style22"> ยังไม่มีรายการจองรถ</div></td>
        </tr>
        <?
}
for ($i=1;$i<=$num;$i++){	
if ($row['name_approve']=="อนุมัติ"){$bg="#EBEBEB";}elseif($row['name_approve']=="การบริการเสร็จสิ้น"){$bg="#FFD7D7";}else{$bg="#B7FFB7";}
$row=mysql_fetch_array($query); 
      $time_go=substr($row[time_go_reserver],0,5);
	   $time_back=substr($row[time_back_reserver],0,5);
?>
        <tr>
          <td height="20" rowspan="2" bgcolor="#FDC8D8"><div align="center"><span class="style36"><span class="style38"><? echo $row['id_reserver'];?></span></span></div></td>
          <td height="9" bgcolor="#CCFFCC">
            <div align="center" class="style43">
              <? 
			$date_reser=substr($row['date_reserver'],0,10);
			//echo "$date_reser";
			echo displaydate($date_reser);
			 ?>
             </div></td>
          <td bgcolor="#97FF97"><div align="center" class="style43"><? echo displaydate($row['date_go_reserver']);?></div></td>
          <td rowspan="2" bgcolor="<?=$bg?>"><span class="style21"><a href="report_reserver.php?id_reserver=<?=$row['id_reserver']?>">
            <?=$row['detail_reserver']?>
            </a></span></td>
          <td rowspan="2" bgcolor="#BBFFD1"><div align="center"><span class="style21">
            <? if ($row['farm_id_car']==0){echo "--";}else{echo "<a href=show_detail.php?farm_id_car=$row[farm_id_car]&check=car target=_blank>$row[farm_id_car]"; }?>
          </span></div></td>
          <td rowspan="2" bgcolor="<?=$bg?>"><div align="center"><span class="style21">
            <?
$sqlQ="select * from driver_car where id_driver='$row[id_driver]'";
$queryQ=mysql_query($sqlQ) or die ("ติดต่อไม่ได้");
$rowQ=mysql_fetch_array($queryQ);
if ($row['id_driver']==0){echo "--";}else{echo "<a href=show_detail.php?id_driver=$row[id_driver]&check=driver target=_blank>$rowQ[name_driver]"; }?>
          </span></div></td>
          <td rowspan="2" bgcolor="<?=$bg?>"><div align="center"><span class="style21">
            <?=$row['id_name']?>
          </span></div></td>
          <td rowspan="2" bgcolor="<?=$bg?>">
            <div align="center">
              <? if ($row['name_approve']=="อนุมัติ"){echo "<img src=images/gogo.gif width=75 height=30>";}
	  		elseif($row['name_approve']=="การบริการเสร็จสิ้น"){echo "<img src=images/ends.gif width=75 height=30>";}
			else{ echo  "<img src=images/end.gif width=75 height=30>";}?>
              </div></td>
          <td rowspan="2" bgcolor="<?=$bg?>">
              <div align="center"><a href="edit_reserver.php?id_reserver=<?=$row['id_reserver']?>&amp;id=<?=$id?>"><img src="image/edit.gif" width="20" height="20" border="0" /></a></div></td>
          <td rowspan="2" bgcolor="<?=$bg?>"><div align="center"><a href="end_reserver.php?id_reserver=<?=$row['id_reserver']?>&amp;id=<?=$id?>"><img src="image/folders.gif" width="20" height="20" border="0" /></a></div></td>
          <td rowspan="2" bgcolor="<?=$bg?>"><div align="center"><a href="delete.php?id_reserver=<?=$row['id_reserver']?>&amp;id=<?=$id?>">[ลบ]</a><a href="end_report_reserver.php?id_reserver=<?=$row['id_reserver']?>"></a></div></td>
        </tr>
        <tr>
          <td height="10" bgcolor="#95DBFD"><div align="center"><span class="style36"><span class="style37"><strong><span class="style40"><? echo date("H:s", strtotime($row['date_reserver'])); ?></span></strong></span></span></div></td>
          <td bgcolor="#D6F1FE"><div align="center"><strong><span class="style40"><? echo date("H:s", strtotime($row['time_go_reserver'])); ?></span></strong></div></td>
        </tr>
		 <tr>
          <td colspan="11"><div align="center" class="style42"> - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - </div></td>
        </tr
        ><? } ?>
      </table>
      <br />
    </div></td>
  </tr>
  <tr>
    <td><div align="center">
      <? include ("backdown.php");?>
    </div></td>
  </tr>
</table>
<p>&nbsp;</p>
<br />
<p><br />
</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><br />
</p>
<p>
</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p align="center">&nbsp;</p>
</body>
</html>
