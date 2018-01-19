<?
session_start();
$id=$_GET['id'];
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
.style32 {color: #003399}
.style15 {font-size: 12px}
.style33 {color: #000000}
.style38 {	font-weight: bold;
	color: #0066FF;
}
.style1 {color: #0066FF}
.style39 {color: #333333}
-->
</style>
</head>
<body>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="square">
  <tr>
    <td><table width="100%" border="0">
      <tr>
        <td height="47" align="left" valign="bottom" bgcolor="#99CCFF"><? include ("menu.php");?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table width="800%" border="0" align="center" cellpadding="1" cellspacing="1">
      <tr>
        <td colspan="8" bgcolor="#0082D9"><form id="form1" name="form1" method="get" action="">
            <label>              </label>
            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="square">
              <tr>
                <td width="196" bgcolor="#99CC00"><span class="style33">ตรวจสอบวันออกเดินทางประจำเดือน</span></td>
                <td width="13" bgcolor="#99CC00">&nbsp;</td>
                <td width="591" bgcolor="#99CC00"><span class="style15">
                  <select name="m">
                    <option value="">เดือน</option>
                    <? 
$dayz=$_GET['d'];
$monthz=$_GET['m'];
$yearz=$_GET['y'];
$thaiz = "$yearz-$monthz-$dayz";

$month=date("m"); 
$day=date("d")+20; 
$year=date("Y"); 
$datead=mktime(22, 15, 10, $month, $day, $year); 
$datead=date("Y-m-d", $datead); 

$month=date("m"); 
$day=date("d");
$year=date("Y"); 
$dateZ=mktime(22, 15, 10, $month, $day, $year); 
$dateQ=date("Y-m-d", $dateZ);			
		if ($m_check<=9){$m_check="0$_GET[m]";}else{ $m_check=$_GET['m'];}			
	 	   $monthname=array("","มกราคม","กุมภาพันธ","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
	   for($i=1;$i<=12;$i++) { ?>
                    <option value = "<?=$i ?>" >
                    <?=$monthname[$i] ?>
                    </option>
                    <?	}	?>
                  </select>
                </span>
                  <input type="submit" name="Submit" value="ตรวจสอบ" />
                  <input type="hidden" name="id" value="<?=$id?>" /></td>
              </tr>
            </table>
            <label></label>
          </form>          </td>
        </tr>
      <tr>
        <td colspan="4" bgcolor="#0A86EB"><div align="center"><span class="style24"><strong>เดือน 
          <? if ($m_check==0){echo "$month/2553";}else{echo "$m_check/2553";}?>
        </strong></span></div></td>
        <td bgcolor="#4FB9FF">&nbsp;</td>
        <td bgcolor="#4FB9FF">&nbsp;</td>
        <td bgcolor="#4FB9FF">&nbsp;</td>
        <td bgcolor="#4FB9FF">&nbsp;</td>
      </tr>
      <tr>
        <td width="36" bgcolor="#0099FF"><div align="center">เลขที่</div></td>
        <td width="78" bgcolor="#0099FF">วันขอบริการ</td>
        <td width="104" bgcolor="#0099FF">วันออกเดินทาง</td>
        <td width="204" bgcolor="#0099FF"><div align="center">รายการ</div></td>
        <td width="95" bgcolor="#0099FF"><div align="center">ผู้ขอ</div></td>
        <td width="112" bgcolor="#0099FF"><div align="center">สถาณะ</div></td>
        <td width="48" bgcolor="#FF88C4"><div align="center">รถเบอร์</div></td>
        <td width="102" bgcolor="#FF6600"><div align="center">พนักงานขับรถ</div>
            <div align="center"></div>
          <div align="center"></div>
          <div align="center" class="style24"></div>
          <div align="center" class="style24"></div>
          <div align="center" class="style24"></div></td>
      </tr>
      <?

include "../connect.php";
include "function_date.php";
if ($m_check=='0')
{
$sql="select * from reserver_car where date_go_reserver  between '$dateQ' and '$datead' order by date_go_reserver asc";
}else{
$sql="select * from reserver_car where date_format(date_go_reserver,'%m')='$m_check'  order by date_go_reserver asc";
}
$query=mysql_query($sql) or die ("ติดต่อไม่ได้");
$num=mysql_num_rows($query);
if ($num==0){
?>
      <tr>
        <td colspan="8"><div align="center" class="style22"> ยังไม่มีรายการจองรถ </div></td>
      </tr>
      <?
}
for ($i=1;$i<=$num;$i++){	
$row=mysql_fetch_array($query); 
if ($row['name_approve']=="อนุมัติ"){$bg="#FFE8F3";}elseif($row['name_approve']=="การบริการเสร็จสิ้น"){$bg="#FFD7D7";}else{$bg="#EBEBEB";}
$time_go=substr($row[time_go_reserver],0,5);
$time_back=substr($row[time_back_reserver],0,5);
?>
      <tr>
        <td bgcolor="<?=$bg?>"><div align="center"><span class="style38"><? echo $row['id_reserver'];?></span></div></td>
        <td bgcolor="<?=$bg?>" class="style1 style21">
          <div align="center" class="style39">
            <? 
			$date_reser=substr($row['date_reserver'],0,10);
			//echo "$date_reser";
			echo displaydate($date_reser);
			 ?></div></td>
        <td bgcolor="<?=$bg?>"><div align="center"><span class="style21"><? echo displaydate($row['date_go_reserver']);?></span></div></td>
        <td bgcolor="<?=$bg?>"><div align="left"> <span class="style21"><a href="report_reserver.php?id_reserver=<?=$row['id_reserver']?>">
            <?=$row['detail_reserver']?>
        </a></span></div></td>
        <td bgcolor="<?=$bg?>"><div align="left"><span class="style21">
            <?=$row['id_name']?>
        </span></div></td>
        <td bgcolor="<?=$bg?>"><div align="center">
            <? if ($row['name_approve']=="อนุมัติ"){echo "<img src=images/gogo.gif width=75 height=30>";}
	  		elseif($row['name_approve']=="การบริการเสร็จสิ้น"){echo "<img src=images/ends.gif width=75 height=30>";}
			else{ echo  "<img src=images/end.gif width=75 height=30>";}?>
        </div></td>
        <td bgcolor="<?=$bg?>"><div align="center"><span class="style21">
            <? if ($row['farm_id_car']==0){echo "--";}else{echo "<a href=show_detail.php?farm_id_car=$row[farm_id_car]&check=car target=_blank>$row[farm_id_car]"; }?>
        </span></div></td>
        <td bgcolor="<?=$bg?>"><div align="center"><span class="style21">
            <?
$sqlQ="select * from driver_car where id_driver='$row[id_driver]'";
$queryQ=mysql_query($sqlQ) or die ("ติดต่อไม่ได้");
$rowQ=mysql_fetch_array($queryQ);
if ($row['id_driver']==0){echo "--";}else{echo "<a href=show_detail.php?id_driver=$row[id_driver]&check=driver target=_blank>$rowQ[name_driver]"; }?>
          </span><a href="delete.php?id_reserver=<?=$row['id_reserver']?>&amp;id=<?=$id?>"><br />
         <? if ($_SESSION['admin_car']!='')
	{ ?> [ลบ]<? } ?></a><a href="end_report_reserver.php?id_reserver=<?=$row['id_reserver']?>"></a></div>
            <div align="right"></div>
          <div align="left" class="style32">
              <div align="right"></div>
          </div>
          <div align="center"></div>
          <div align="center"></div>
          <div align="center"></div>
          <div align="center"></div></td>
      </tr>	  
      <? } ?>
	        <tr>
        <td colspan="8" bgcolor="<?=$bg?>">จำนวน <?=$num?> งาน</td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td>
      <div align="left">
        <? include ("backdown.php");?>
        </div></td></tr>
</table>

</body>
</html>
