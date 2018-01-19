<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
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
</style>
<style type="text/css">
.box {
 /*  width:1000px;
 /*   height:100px;*/
    /* ส่วนของ การแสดงเส้น  */
 /*   border-color:#6CF;*/
 /*   border-style:solid;*/
    /* จบส่วนของ การแสดงเส้น  */
    /* ส่วนของ gradient */
 /*   background: rgb(254,255,255); /* Old browsers */
 /*   background: -moz-linear-gradient(top,  rgba(254,255,255,1) 0%, rgba(210,235,249,1) 100%); /* FF3.6+ */
 /*   background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(254,255,255,1)), color-stop(100%,rgba(210,235,249,1))); /* Chrome,Safari4+ */
 /*   background: -webkit-linear-gradient(top,  rgba(254,255,255,1) 0%,rgba(210,235,249,1) 100%); /* Chrome10+,Safari5.1+ */
 /*   background: -o-linear-gradient(top,  rgba(254,255,255,1) 0%,rgba(210,235,249,1) 100%); /* Opera 11.10+ */
 /*   background: -ms-linear-gradient(top,  rgba(254,255,255,1) 0%,rgba(210,235,249,1) 100%); /* IE10+ */
 /*   background: linear-gradient(to bottom,  rgba(254,255,255,1) 0%,rgba(210,235,249,1) 100%); /* W3C */
 /*   filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#feffff', endColorstr='#d2ebf9',GradientType=0 ); /* IE6-9 */
    /* จบ ส่วนของ gradient */
    /* ส่วนการแสดง ผล radius*/
    -webkit-border-radius: 0px;
    border-radius: 0px; 
   /*สบ ส่วนการแสดง ผล radius*/
    /*ส่วนของ shadow */
    -webkit-box-shadow: 0px 0px 5px 5px rgba(200, 197, 200, 1);
    box-shadow: 0px 0px 5px 5px rgba(200, 197, 200, 1); 
     /* จบ ส่วนของ shadow */
}
.style56 {color: #FF0000}
.style60 {
	font-size: 18px;
	color: #FF0000;
}
</style>

</head>
<body   bgcolor="#DFFDFF" >
<table align="center" width="1000px">
<td><div class="box" >

<table width="990px" border="0" align="center" cellpadding="0" cellspacing="0"  bgcolor="#FFFFFF">
 <tr>
    <td>  
    	<table width="990px" border="0">
      <tr align="center">
        <td height="47" valign="top"><? include ("menu.php");?></td>
      </tr>
    </table> 
    </td>
  </tr>
  <tr>
    <td><div align="center">
      <table width="990px" height="128" border="1" align="center"b bordercolor="#000000" > 
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

  $calTime = getdate(date(mktime(date("H") + $diffHour, 
    date("i") + $diffMinute)));
  $today = $calTime["mday"];     //วันที่
  $month = $calTime["mon"];      //เดือน
  $year = $calTime["year"];      //ปี

if ($dfMonth == "") {
  /* ถ้าไม่มีการระบุให้แสดงปฏิทินของเดือนใดเดือนหนึ่ง เราจะแสดงปฏิทินของเดือน
     ปัจจุบันตามเวลาในเครื่องไคลเอ็นต์ โดยใช้ฟังก์ชั่น getdate() สร้างวันที่/เวลา
     ปัจจุบันของเครื่องไคลเอ็นต์เก็บไว้ในตัวแปร $calTime ซึ่งฟังก์ชั่นนี้จะคืนค่ากลับมา
     เป็นอาร์เรย์ */
  /*
  $calTime = getdate(date(mktime(date("H") + $diffHour, 
    date("i") + $diffMinute)));
  $today = $calTime["mday"];     //วันที่
  $month = $calTime["mon"];      //เดือน
  $year = $calTime["year"];      //ปี
  */
   	$dfMonth = $month;
	$dfYear = $year;
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
/*
echo $month;
echo  "<br>";
echo  $year;
echo  "<br>";
echo  $dfMonth ;
echo  "<br>";
echo  $dfYear ;
echo  "<br>";
*/
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
	  if  ( ($month == $dfMonth && $year == $dfYear && $iday > $today))  {
      echo "<td width=\"24\" align=\"center\" class=\"sunday\"><a href=calendar_car.php?d=$iday&m=$month&y=$year&id=$id>$iday<a></td>\n";
	  } else {
		 echo " <td width=\"24\" align=\"center\" class=\"sunday\">$iday</td>\n";
	  }
    }
    elseif ($iday == $today) {  //กรณีที่เป็นวันปัจจุบัน
      echo "<td width=\"24\" align=\"center\" class=\"today\"><a href=calendar_car.php?d=$iday&m=$month&y=$year&id=$id>$iday<a></td>\n";
    }
    else {
		//if ( ($month == $dfMonth && $year == $dfYear && $iday > $today)) {
      echo "<td width=\"24\" align=\"center\" class=\"norm\"><a href=calendar_car.php?d=$iday&m=$month&y=$year&id=$id>$iday<a></td>\n";
		//} else {
		//	echo "<td width=\"24\" align=\"center\" class=\"norm\">$iday</td>\n";
		//}
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
          echo "<td width=\"24\" align=\"center\" class=\"sunday\"><a href=calendar_car.php?d=$iday&m=$month&y=$year&id=$id>$iday<a></td>\n";
        }
        elseif ($i == 0 && ($iday == $today)) {
          echo "<td width=\"24\" align=\"center\" class=\"today\"><a href=calendar_car.php?d=$iday&m=$month&y=$year&id=$id>$iday<a></td>\n";
        }
        elseif ($iday == $today) {
		//elseif (($month == $dfMonth && $year == $dfYear && $iday > $today)) {
          echo "<td width=\"24\" align=\"center\" class=\"today\"><a href=calendar_car.php?d=$iday&m=$month&y=$year&id=$id>$iday<a></td>\n";
        }
        else {
          echo "<td width=\"24\" align=\"center\" class=\"norm\"><a href=calendar_car.php?d=$iday&m=$month&y=$year&id=$id>$iday<a></td>\n";
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
          <td height="20" colspan="7" align="center"><a href="<?php echo $PHP_SELF; ?>&id=<?=$id?>"></a></td>
        </tr>
      </table>
    </div></td>
    <tr height="2px"><td></td></tr>
  </tr>
  <tr>
    <td><div align="center">
      <table width="1000px" border="0" align="center" cellpadding="1" cellspacing="1" class="square">
        <?
		///////////////////////////////////////////////////////////////////////////////////////////////////////////////
			if ($thai2=='--')
			{
                $sqld="select distinct(farm_id_car) from reserver_car where date_go_reserver='$thaiz' and name_approve='อนุมัติ' order by id_reserver desc";
            }
           else
           {
               $sqld="select distinct(farm_id_car) from reserver_car where date_go_reserver='$thai2' and name_approve='อนุมัติ' order by id_reserver desc";
           } 
             $queryd=mysql_query($sqld) or die ("ติดต่อไม่ได้");
             $numd=mysql_num_rows($queryd);
			 
			 
		  $sql="select * from car";
          $query=mysql_query($sql) or die ("ติดต่อไม่ได้");
          $num_=mysql_num_rows($query);
///////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>	
		<tr>
          <td colspan="4" bgcolor="#BBDDFF"><span class="style30">รายการรถขอบริการ <span class="style33">วันที่
            <? if ($thai2=='--')
	  { echo displaydate($thaiz);
	  }else { echo displaydate($thai2); }?>&nbsp;&nbsp;&nbsp;&nbsp;</span></span></td>
		          <td colspan="2" bgcolor="#BBDDFF"><div align="center">
              <span class="style22"><span class="style34">
<? if ($day1==''){ ?><a href="add_reserver.php?d=<?=$dayz?>&m=<?=$monthz?>&y=<?=$yearz?>&id=<?=$id?>"> <? } else {?>
<a href="add_reserver.php?d=<?=$day1?>&m=<?=$month1?>&y=<?=$year1?>&id=<?=$id?>"><? } ?><img src="images/addcar.gif" width="142" height="30" border="0" /></a></td>
        </tr>
        <tr>
          <td width="99" bgcolor="#FFEBD7"><div align="center"><strong>วันที่เดินทาง</strong></div></td>
          <td width="113" bgcolor="#FFEBD7"><div align="center"><strong>เวลาเดินทาง</strong></div></td>
          <td width="218" bgcolor="#FFEBD7"><div align="center"><strong>รายการ</strong></div></td>
          <td width="107" bgcolor="#FFEBD7"><div align="center"><strong>ผู้จอง</strong></div></td>
          <td width="92" bgcolor="#FFEBD7"><div align="center"><strong>หมายเลขรถ</strong></div></td>
          <td width="150" bgcolor="#FFEBD7"><div align="center"><strong>สถาณะ</strong></div></td>
        </tr>
        <?
if ($thai2=='--'){
$sql="select * from reserver_car where date_go_reserver='$thaiz' order by id_reserver desc";
}else{
$sql="select * from reserver_car where date_go_reserver='$thai2' order by id_reserver desc";
} 
$query=mysql_query($sql) or die ("ติดต่อไม่ได้");
$num=mysql_num_rows($query);
if ($num==0){
?>
        <tr>
          <td colspan="6"><div align="center" class="style22"> ยังไม่มีรายการจองรถ</div></td>
        </tr>
        <?
}
$ig=0;
for ($i=1;$i<=$num;$i++){	
$row=mysql_fetch_array($query); 
      $time_go=substr($row[time_go_reserver],0,5);
	   $time_back=substr($row[time_back_reserver],0,5);
?>
        <tr>
          <td height="20" bgcolor="#FFF9F2"><span class="style36"><? echo displaydate($row['date_go_reserver']);?></span></td>
          <td bgcolor="#FFF9F2"><span class="style36"><? echo "$time_go ถึงเวลา $time_back";?></span></td>
          <td bgcolor="#FFF9F2"><span class="style21">
            <?=$row['detail_reserver']?>
          </span></td>
          <td bgcolor="#FFF9F2"><span class="style37">
            <?=$row['id_name']?></span></td>
          <td bgcolor="#FFF9F2"><div align="center"><span class="style21">
              <? echo "<a href=show_car2.php?farm_id_car=$row[farm_id_car] target=\"_blank\">$row[farm_id_car]</a>"; ?>
          </span></div></td>
          <td bgcolor="#FFF9F2"><div align="center">
              <? if ($row['name_approve']=="อนุมัติ"){echo "<img src=images/gogo.gif width=75 height=30>"; $ig=$ig+1; }
	  		elseif($row['name_approve']=="การบริการเสร็จสิ้น"){echo "<img src=images/ends.gif width=75 height=30>";}
			else{ echo  "<img src=images/end.gif width=75 height=30>";}?>
          </div></td>
        </tr>
        <? 
		 } 
		?>
		
		  
		</table>
    </div></td>
  </tr>
  <tr height="5px">
    <td>
    </td>
  </tr>
  <tr>
    <td align="center"><? include ("backdown.php");?></td>
  </tr>    
</table>  </td>
</table>
</body>
</html>