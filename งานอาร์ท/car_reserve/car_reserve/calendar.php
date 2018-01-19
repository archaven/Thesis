<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<html>
<head><title>ปฏิทินการเดินรถ</title>
<style type="text/css">
  .today  { font-family: ms sans serif; font-size: 10pt; 
            font-weight: bold; background-color: #000000; 
            color: #FFFFFF; border: 3 double #000000; }
  .sunday { font-family: ms sans serif; font-size: 10pt; 
            background-color: #FF0000; color: #FFFFFF; }
  .norm   { font-family: ms sans serif; font-size: 10pt; 
            background-color: #FFFFFF; color: #000000; }
.style1 {
	color: #FFFFFF;
	font-weight: bold;
}
</style></head>
<body bgcolor="#e9f2f0">
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

<table width="468" border="1" align="center" bordercolor="black">
<tr class="norm">
  <td colspan="7" align="center" bgcolor="#0066FF"><span class="style1">เช็คตารางการจองรถ</span></td>
  <tr class="norm"><td width="65" align="center">
<a href="<?php echo $PHP_SELF; ?>
?today=<?php echo $today; ?>
&dfMonth=<?php echo ($month - 1) ?>
&dfYear=<? echo $year; ?>">&lt;</a>
</td>
<td align="center" colspan="5" bgcolor="#F9F4DD">
<?php echo $thmonthname[$month - 1]; ?>&nbsp;
<?php echo ($year + 543); ?></td>
<td width="63" align="center">
<a href="<?php echo $PHP_SELF; ?>
?today=<?php echo $today; ?>
&dfMonth=<?php echo ($month + 1); ?>
&dfYear=<?php echo $year; ?>">&gt;</a></td>
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
      echo "<td width=\"24\" align=\"center\" class=\"sunday\"><a href=show_reserver.php?d=$iday&m=$month&y=$year>$iday<a></td>\n";
    }
    elseif ($iday == $today) {  //กรณีที่เป็นวันปัจจุบัน
      echo "<td width=\"24\" align=\"center\" class=\"today\"><a href=show_reserver.php?d=$iday&m=$month&y=$year>$iday<a></td>\n";
    }
    else {
      echo "<td width=\"24\" align=\"center\" class=\"norm\"><a href=show_reserver.php?d=$iday&m=$month&y=$year>$iday<a></td>\n";
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
          echo "<td width=\"24\" align=\"center\" class=\"sunday\"><a href=show_reserver.php?d=$iday&m=$month&y=$year>$iday<a></td>\n";
        }
        elseif ($i == 0 && ($iday == $today)) {
          echo "<td width=\"24\" align=\"center\" class=\"today\"><a href=show_reserver.php?d=$iday&m=$month&y=$year>$iday<a></td>\n";
        }
        elseif ($iday == $today) {
          echo "<td width=\"24\" align=\"center\" class=\"today\"><a href=show_reserver.php?d=$iday&m=$month&y=$year>$iday<a></td>\n";
        }
        else {
          echo "<td width=\"24\" align=\"center\" class=\"norm\"><a href=show_reserver.php?d=$iday&m=$month&y=$year>$iday<a></td>\n";
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
<td align="center" colspan="7">
<a href="<?php echo $PHP_SELF; ?>">วันที่ปัจจุบัน</a></td>
</tr>
</table>
</body></html>
