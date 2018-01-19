<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<title>ข้อมูลการจองรถ</title><link rel="stylesheet" type="text/css" href="../lib/web.css">
<style type="text/css">
<!--
.style33 {
	font-size: 16px;
	font-weight: bold;
}
.style34 {color: #CC6600}
.style36 {color: #333333; font-weight: bold; }
.style1 {color: #0066FF}
.style37 {color: #FF6600}
.style21 {color: #666666}
-->
</style>
</head>
<body onload="MM_preloadImages('menu_files/ebbtcbmenu1_0.gif','menu_files/ebbtcbmenu2_0.gif','menu_files/ebbtcbmenu3_0.gif','menu_files/ebbtcbmenu4_0.gif','menu_files/ebbtcbmenu5_0.gif','menu_files/ebbtcbmenu6_0.gif')">
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
      <table width="800" border="0">
        <tr>
          <td valign="top"><span class="style34"><br />
              | <a href="add_car.php?id=<?=$id?>">เพิ่มรถใหม่</a>| <a href="show_car.php?id=<?=$id?>">ปรับปรุงรายการรถ</a> | <a href="add_driver.php?id=<?=$id?>">เพิ่มพนักงานขับรถ</a>| <a href="show_driver.php?id=<?=$id?>">ปรับปรุงรายการพนักงาน</a></span><br />
            <br />
            <table width="1000px" border="0" align="left" class="square">
              <tr>
                <td colspan="4" bgcolor="#FFCC00"><span class="style33">พนักงานขับรถ</span></td>
              </tr>
              <tr>
                <td width="93" bgcolor="#E5E5E5"><div align="center" class="style36">
                    <div align="center">ภาพ</div>
                </div></td>
                <td width="256" bgcolor="#E5E5E5"><div align="center" class="style36">
                    <div align="center">ชื่อ</div>
                </div></td>
                <td width="117" bgcolor="#E5E5E5"><div align="center" class="style36">
                    <div align="center">รายละเอียด</div>
                </div></td>
                <td width="118" bgcolor="#E5E5E5"><div align="center"><span class="style36">ปรับปรุงรายการ</span></div></td>
              </tr>
              <?						 include "connect.php";
			  					mysql_query("SET NAMES TIS620");
		  		    		    $sql="select * from driver_car ";
						$result=mysql_query($sql) or die ("ติดต่อฐานไม่ได้");
						$num=mysql_num_rows($result);
for($i=1;$i<=$num;$i++)
   {
$row = mysql_fetch_array($result);
		?>
              <tr>
                <td align="left" valign="top" bgcolor="#EAEAEA"><div align="center">
                    <?
			if ($row['picture_driver']!="")
			{ 
			$imgsize = getimagesize("attach/{$row['picture_driver']}");
			//print_r($imgsize); แสดงข้อมูล
			if($imgsize[1]>80)
       		{
		$w=80;
		$h=($imgsize[1]*80/$imgsize[0]);
		}else
		{
			$w=$imgsize[0];
			$h=$imgsize[1];			
		}
   echo  "<center><img src='attach/$row[picture_driver]' width=$w height=$h><br>";
	    }else{echo "ยังไม่มีภาพ";}?>
                </div></td>
                <td align="left" valign="middle" bgcolor="#EAEAEA"><div align="center"><span class="style21">
                  <?
$sqlQ="select * from driver_car where id_driver='$row[id_driver]'";
$queryQ=mysql_query($sqlQ) or die ("ติดต่อไม่ได้");
$rowQ=mysql_fetch_array($queryQ);
if ($row['id_driver']==0){echo "--";}else{echo $rowQ['name_driver']; }?>
                <? echo "$row[lastname_driver]";
             ?></div></td>
                <td align="left" valign="middle" bgcolor="#EAEAEA"><div align="center">
                  <?=$row['detail_driver']?></div></td>
                <td align="left" valign="middle" bgcolor="#EAEAEA"><div align="center"><a href="edit_driver.php?id_driver=<?=$row['id_driver']?>&id=<?=$_GET['id']?>">ปรับปรุง</a></div></td>
              </tr>
              <? } ?>
            </table>          </td>
        </tr>
      </table>
    </div></td>
  </tr>
  <tr>
    <td><div align="center">
      <? include ("backdown.php");?>
    </div></td>
  </tr>
</table>
<span class="style34"><br />
</span><br />
<br />
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
