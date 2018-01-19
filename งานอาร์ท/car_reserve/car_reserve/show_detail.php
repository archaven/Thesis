<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<title>ข้อมูลการจองรถ</title><link rel="stylesheet" type="text/css" href="../lib/web.css">
<title>Untitled Document</title>
<style type="text/css">
<!--
.style34 {
	font-size: 16px;
	font-weight: bold;
}
.style36 {
	font-size: 14px;
	font-weight: bold;
	color: #FF0000;
}
.style38 {font-size: 14px}
.style40 {font-size: 16px}
.style41 {color: #0033FF}
.style43 {font-size: 16px; font-weight: bold; color: #003300; }
body {
	background-color: #0066FF;
}
-->
</style>
</head>

<body>
<table width="500" border="0" align="center" cellpadding="0" cellspacing="0" class="square">
    <?						 
     include "connect.php";
	 $check=$_GET['check'];
	 if ($check=='car'){
	 $sql="select * from car where id_car=$_GET[id_car]";}else{
	 $sql="select * from driver_car where id_driver='$_GET[id_driver]'";}
	$result=mysql_query($sql) or die ("ติดต่อฐานไม่ได้");
	$num=mysql_num_rows($result);
    $row = mysql_fetch_array($result);
		?>
  <tr>
    <td width="693"><div align="center">
      <table width="500" border="0" cellpadding="5" cellspacing="0">
        <tr>
          <td valign="top" bgcolor="#339900"><span class="style34">รายละเอียด</span></td>
        </tr>
 <?  if ($check=='car') {?>
	    <tr>
          <td width="687" valign="top" bgcolor="#FFFFFF"><div align="center"><span class="style36"><br />
            หมายเลข
            <?=$row['farm_id_car']?>
            </span><br />
            <br />
          </div></td>
        </tr>
        <tr>
          <td valign="top" bgcolor="#FFFFFF"><div align="center">
            <table width="100" border="0" cellpadding="1" cellspacing="2" class="square">
              <tr>
                <td bgcolor="#EEEEEE"><div align="center">
                  <?
		if($row['picture_car']!="")
			{ 
			?>
			 <center>
			 <img src="car_pic/<? echo $row['picture_car']; ?>">
			 </center>
	         <?
			 }
	   
	   else{echo "ยังไม่มีภาพ";}?>
                </div></td>
              </tr>
            </table>
          </div></td>
        </tr>
        <tr>
          <td valign="top" bgcolor="#FFFFFF"><div align="center"><span class="style38"><br />
            <? echo "ยี่ห้อ <font color=green>$row[brand_car]&nbsp;</font>รุ่น <font color=6699ff>$row[model_car]</font><br>ประเภท:<font color=999900>$row[type_car]</font>";
             ?></span></div></td>
        </tr>
		<? }else{ ?>
        <tr>
          <td valign="top" bgcolor="#FFFFFF"><br />
            <table width="100" border="0" align="center" cellpadding="1" cellspacing="2" class="square">
              <tr>
                <td bgcolor="#EEEEEE"><div align="center">
                  <?
			if ($row['picture_driver']!="")
			{ 
			$imgsize = getimagesize("attach/{$row['picture_driver']}");
			//print_r($imgsize); แสดงข้อมูล
			if($imgsize[1]>600)
       		{
		$w=600;
		$h=($imgsize[1]*600/$imgsize[0]);
		}else
		{
			$w=$imgsize[0];
			$h=$imgsize[1];			
		}
   echo  "<center><img src='attach/$row[picture_driver]' width=$w height=$h><br>";
	    }else{echo "ยังไม่มีภาพ";}?>
                </div></td>
              </tr>
            </table>
            <div align="center"></div></td>
        </tr>
        <tr>
          <td valign="top" bgcolor="#FFFFFF"><span class="style43"><br />
            <? echo "$row[name_driver]";
             ?></span></td>
        </tr>
        <tr>
          <td valign="top" bgcolor="#FFFFFF"><span class="style40">เบอร์โทร <span class="style41">
            <?=$row['detail_driver']?></span></span></td>
        </tr>
		<? } ?>
        <tr>
          <td valign="top" bgcolor="#FFFFFF"><div align="left"></div></td>
        </tr>
      </table>
    </div></td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
