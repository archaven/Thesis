<?
session_start(); 
$id=$_GET['id'];
include "connect.php";
include "function_date.php";
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
.style36 {color: #CC6600}
.style37 {color: #0066FF}
.style38 {	font-weight: bold;
	color: #0066FF;
}
.style40 {color: #333333}
.style42 {color: #CCCCCC; font-weight: bold; }
.style43 {color: #000000; }
.style45 {
	color: #FF0000;
	font-size: 24px;
}
.style48 {
	color: #000099;
	font-size: 14px;
	font-weight: bold;
}
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
<body  bgcolor="#DFFDFF">
<table align="center" width="1000px">
<td><div class="box" >
<table width="1000px" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  
  
  <tr>
    <td>
	<table width="100%" border="0">
          <tr align="center">
        <td  valign="top"><?   include ("menu.php");?></td>
      </tr>
    </table>
	</td>
  </tr> 
  
  
       <tr>
	 <td><div align="center">
	   <table width="1000px" border="0" align="center" cellpadding="1" cellspacing="1" class="square">
        
		
	<?
	   $day_klab=date("d");
	   $month_klab=date("m");
	   $year_klab=date("Y");
		  if($month_klab=='01')
		  {
		       $display_month='มกราคม';
			   $start_=$year_klab.'-'.$month_klab.'-'.$day_klab;  
			
		  }
		  else if($month_klab=='02')
		  {
		       $display_month='กุมภาพันธ์';
			   $start_=$year_klab.'-'.$month_klab.'-'.$day_klab;  
			  
		  }
		  else if($month_klab=='03')
		  {
		  $display_month='มีนาคม';
			   $start_=$year_klab.'-'.$month_klab.'-'.$day_klab;  
		
		  }
		  else if($month_klab=='04')
		  {
		  $display_month='เมษายน';
			   $start_=$year_klab.'-'.$month_klab.'-'.$day_klab;  
			   
		  }
		  else if($month_klab=='05')
		  {
		  $display_month='พฤษภาคม';
			   $start_=$year_klab.'-'.$month_klab.'-'.$day_klab;  
			  
		  }
		  else if($month_klab=='06')
		  {
		  $display_month='มิถุนายน';
			   $start_=$year_klab.'-'.$month_klab.'-'.$day_klab;  
			   
		  }
		  else if($month_klab=='07')
		  {
		  $display_month='กรกฎาคม';
			   $start_=$year_klab.'-'.$month_klab.'-'.$day_klab;  
			  
		  }
		  else if($month_klab=='08')
		  {
		  $display_month='สิงหาคม';
			   $start_=$year_klab.'-'.$month_klab.'-'.$day_klab;  
			  
		  }
		  else if($month_klab=='09')
		  {
		  $display_month='กันยายน';
			   $start_=$year_klab.'-'.$month_klab.'-'.$day_klab;  
			   
		  }
		  else if($month_klab=='10')
		  {
		  $display_month='ตุลาคม';
			   $start_=$year_klab.'-'.$month_klab.'-'.$day_klab;  
			  
		  }
		  else if($month_klab=='11')
		  {
		  $display_month='พฤศจิกายน';
			   $start_=$year_klab.'-'.$month_klab.'-'.$day_klab;  
			  
		  }
		  else if($month_klab=='12')
		  {
		  $display_month='ธันวาคม';
			   $start_=$year_klab.'-'.$month_klab.'-'.$day_klab;  
			 
		  }
		     $stop_=$year_klab.'-12-31';
		?>
        <tr>
          <td colspan="8" bgcolor="#D7EBFF"><div align="center"><span class="style30"><span class="style45">รายการขอรถ</span></span><span class="style22"><span class="style34"><a href="add_reserver.php?d=<?=$dayz?>&amp;m=<?=$monthz?>&amp;y=<?=$yearz?>&amp;id=<?=$id?>"><a href="add_reserver.php?d=<?=$day1?>&m=<?=$month1?>&y=<?=$year1?>&id=<?=$id?>"></a></div></td>
        </tr>
        <tr>
    
          <td width="73" bgcolor="#FFEBD7"><div align="center"><strong>วันขอ</strong></div></td>
          <td width="100" bgcolor="#FFEBD7"><div align="center"><strong>วันออกเดินทาง</strong></div></td>
          <td width="232" bgcolor="#FFEBD7"><div align="center"><strong>รายการ</strong></div></td>
          <td width="44" bgcolor="#FFEBD7"><div align="center"><strong>รถ</strong></div></td>
          <td width="97" bgcolor="#FFEBD7"><div align="center"><strong>พขร.</strong></div></td>
          <td width="91" bgcolor="#FFEBD7"><div align="center"><strong>ผู้จอง</strong></div></td>
          <td width="102" bgcolor="#FFEBD7"><div align="center"><strong>สถาณะ</strong></div></td>
          </tr>
        <?

$sql="select * from reserver_car where  date_go_reserver>='$start_'  order by date_go_reserver asc";
$query=mysql_query($sql) or die ("ติดต่อไม่ได้");
$num=mysql_num_rows($query);
if ($num==0){
?>
        <tr>
          <td colspan="8"><div align="center" class="style22"> ยังไม่มีรายการจองรถ</div></td>
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
          
          <td height="9" bgcolor="#CCFFCC"><div align="center" class="style43">
              <? 
			$date_reser=substr($row['date_reserver'],0,10);
			//echo "$date_reser";
			echo displaydate($date_reser);
			 ?>
          </div></td>
          <td bgcolor="#97FF97"><div align="center" class="style43"><? echo displaydate($row['date_go_reserver']);?></div></td>
          <td rowspan="2" bgcolor="<?=$bg?>"><span class="style21">
		  
		  <?
		  if($row['name_approve']=='อนุมัติ')
		  {
		   echo $row['detail_reserver'];
		   ?>&nbsp;&nbsp;<a href="report_reserver.php?id_reserver=<?=$row['id_reserver']?>" target="_blank">[พิมพ์]</a>
		  <?
		   }
		  else
		  {
		     echo $row['detail_reserver'];
		  }
		  ?>
		 </span></td>
          <td rowspan="2" bgcolor="#BBFFD1"><div align="center"><span class="style21"><? echo $row['farm_id_car']; ?></span></div></td>
          <td rowspan="2" bgcolor="<?=$bg?>"><div align="center"><span class="style21">
              <?
$sqlQ="select * from driver_car where id_driver='$row[id_driver]'";
$queryQ=mysql_query($sqlQ) or die ("ติดต่อไม่ได้");
$rowQ=mysql_fetch_array($queryQ);
echo $rowQ['name_driver'];
?>
          </span></div></td>
          <td rowspan="2" bgcolor="<?=$bg?>"><div align="center"><span class="style21">
              <?=$row['id_name']?>
          </span></div></td>
		            <td rowspan="2" bgcolor="<?=$bg?>"><div align="center">
              <? if ($row['name_approve']=="อนุมัติ"){echo "<img src=images/gogo.gif width=75 height=30>";}
	  		elseif($row['name_approve']=="การบริการเสร็จสิ้น"){echo "<img src=images/ends.gif width=75 height=30>";}
			else{ echo  "<img src=images/end.gif width=75 height=30>";}?>
          </div></td>
          </tr>
        <tr>
          <td height="10" bgcolor="#95DBFD"><div align="center"><span class="style36"><span class="style37"><strong><span class="style40"><? echo date("H:s", strtotime($row['date_reserver'])); ?></span></strong></span></span></div></td>
          <td bgcolor="#D6F1FE"><div align="center"><strong><span class="style40"><? echo date("H:s", strtotime($row['time_go_reserver'])); ?></span></strong></div></td>
        </tr>
        <tr>
          <td colspan="8"><div align="center" class="style42"> - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - </div></td>
        </tr
        >
        <? }?>
      </table>
    </div></td>
  </tr>
  <tr height="26px">
    <td><div align="center" class="style48">	รวมทั้งหมด <? echo $i-1; ?> รายการ<br />
    </div></td>
  </tr>
 
  <tr>
    <td><div align="center">
      <?   include ("backdown.php");?>
    </div></td>
  </tr>
  </table>  </td>
</table>
</body>
</html>
