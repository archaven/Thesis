<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<title>ข้อมูลการจองรถ</title><link rel="stylesheet" type="text/css" href="../lib/web.css">
<style type="text/css">
<!--
.style21 {color: #666666}
.style1 {color: #0066FF}
.style2 {
	font-size: 20px;
	font-weight: bold;
	color: #FFFFFF;
}
.style33 {color: #CC6600}
.style34 {
	font-size: 18px;
	color: #FF0000;
	font-weight: bold;
}
.style35 {
	color: #0066FF;
	font-weight: bold;
	font-size: 16px;
}
.style36 {font-size: 16px}
.style45 {font-size: 14px}
.style48 {font-size: 27px}
.style50 {
	font-size: 27px;
	font-weight: bold;
	color: #FF0000;
}
-->
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
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
    <td><table width="100%" border="0">
      <tr>
        <td height="47" valign="top"><? include ("menu.php");?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><div align="center">
      <table width="1000" border="0">
        <tr>
          <td valign="top"><!--  <span class="style33"><br />
           ข้อมูลรถ | <a href="?h=1&id=<?//=$_GET['id']?>">สำนักงานฟาร์ม</a> | <a href="?h=2&id=<?//=$_GET['id']?>">สำนักงานใหญ่</a></span><br /> 
            <br />    -->
            <table width="1000px" border="0" align="left" cellpadding="1" cellspacing="1" class="square">
              <tr height="30px">
                <td colspan="2" bgcolor="#608000"><div align="center"><span class="style2">ข้อมูลรถ</span></div></td>
              </tr>
             <tr height="30px">
                <td width="391" bgcolor="#FFFFFF"><div align="center" class="style1 style45"><strong>[ภาพ]</strong></div></td>
                <td width="400" bgcolor="#FFFFFF"><div align="center" class="style35 style45">[รายละเอียด]</div>
                  <div align="center" class="style1"></div>                  <div align="center"></div></td>
                </tr>
              <?						 include "connect.php";
		    		    $sql="select * from car ";
						$result=mysql_query($sql) or die ("ติดต่อฐานไม่ได้");
						$num=mysql_num_rows($result);
for($i=1;$i<=$num;$i++)
   {
$row = mysql_fetch_array($result);
		?>
              <tr>
                <td bgcolor="#FFFFFF"><div align="center">
                  <?
		if ($row['picture_car']!="")
			{ 
			$imgsize = getimagesize("car_pic/{$row['picture_car']}");
			//print_r($imgsize); แสดงข้อมูล
			if($imgsize[1]>150)
       		{
		$w=350;
		$h=($imgsize[1]*330/$imgsize[0]);
		}else
		{
			$w=$imgsize[0];
			$h=$imgsize[1];			
		}
    echo  "<center><img src='car_pic/$row[picture_car]' width=$w height=$h>";
	   }else{echo "ยังไม่มีภาพ";}?></div></td>
                <td valign="middle" bgcolor="#FFFFFF" align="center"><div align="center"><span class="style21"><span class="style34 style36"><span class="style48"><? echo "เบอร์ $row[farm_id_car]"; ?></span></span></span><br />
                    <br />
                    <span class="style36"><? echo "ยี่ห้อ <font color=green>$row[brand_car]&nbsp;</font>รุ่น <font color=6699ff>$row[model_car]</font><br>ประเภทรถ&nbsp;<font color=999900>$row[type_car]<br><font color=black>การใช้งาน&nbsp;</font><font color=brown>$row[type_]</font>";
             ?></span></div>
                  <div align="center"></div>                  <div align="center"><a href="edit_car.php?id_car=<?=$row['id_car']?>"></a></div></td>
                </tr>
              <? } ?>
            </table>
            </td>
        </tr>
      </table>
    </div></td>
  </tr>
  <tr>
    <td><div align="center">
      <? include ("backdown.php");?>
    </div></td>
  </tr>
  </table>  </td>
</table>
<br />
<br />
<br />
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
