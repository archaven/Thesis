<?
session_start(); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<title>รับเรื่องการจอง</title><link rel="stylesheet" type="text/css" href="../lib/web.css">
<style type="text/css">
<!--
.style16 {
	color: #0066FF;
	font-weight: bold;
}
.style19 {color: #333333}
.style26 {color: #003300}
.style27 {color: #FFFFFF}
.style21 {color: #666666}
.style32 {color: #003399}
.style1 {color: #0066FF}
.style2 {font-size: 16px;
	font-weight: bold;
}
.style33 {color: #CC6600}
-->
</style>
</head>
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
      <table width="800" border="0">
        <tr>
          <td valign="top"><span class="style33"><br />
              | <a href="add_car.php?id=<?=$_GET['id']?>">เพิ่มรถใหม่</a>| <a href="show_car.php?id=<?=$_GET['id']?>">ปรับปรุงรายการรถ</a> | <a href="add_driver.php?id=<?=$_GET['id']?>">เพิ่มพนักงานขับรถ</a>| <a href="show_driver.php?id=<?=$_GET['id']?>">ปรับปรุงรายการพนักงาน</a></span><br />
            <table width="100" border="0" align="center">
              <tr>
                <td valign="top"><p>
                    <?
$dayz=$_GET['d'];
$monthz=$_GET['m'];
$yearz=$_GET['y'];
$thaiz = "$yearz-$monthz-$dayz";
include "connect.php";
include "function_date.php";
$id_reserver=$_GET['id_reserver'];
$sql="select * from reserver_car where id_reserver='$id_reserver'";
$query=mysql_query($sql) or die ("ติดต่อไม่ได้1");
$row=mysql_fetch_array($query);
 $time_go=substr($row[time_go_reserver],0,5);
	   $time_back=substr($row[time_back_reserver],0,5);
?>
                  </p>
                    <form id="form1" name="form1" method="post" action="save_edit_reserver.php">
                      <table width="763" border="0" align="left" cellpadding="1" cellspacing="2">
                        <tr>
                          <td width="757" align="left" valign="top"><table width="750" border="0" align="left" cellpadding="2" cellspacing="10" class="square2">
                              <tr>
                                <td colspan="3" align="right" bgcolor="#FFFFFF"><div align="center">
                               <!---- <img src="../images/50y.gif" width="190" height="103" /> --><br />
                                        <span class="style16">ขอบริการยานพาหนะ</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="style19">วันเวลาที่ขอ <? echo displaydate($row['date_reserver']);?></span></div></td>
                              </tr>
                              <tr>
                                <td colspan="3" align="right" bgcolor="#CEE7FF"><div align="left"></div></td>
                              </tr>
                              <tr>
                                <td colspan="3" align="right" bgcolor="#FFFFFF"><div align="left"> <img src="image/1.jpg" /> </div></td>
                              </tr>
                              <tr>
                                <td colspan="3" align="right" bgcolor="#EBEBEB"><div align="left"><strong>บริษัทที่ขอบริการ</strong><br />
                                        <label>
                                        <input name="company_reserver" type="radio" value="CDF" <? if ($row['company_reserver']==CDF){?> checked="checked" / <? } ?>/>
                                        <strong> CDF </strong></label>
                                        <strong>
                                        <label>
                                        <input name="company_reserver" type="radio" value="CR" <? if ($row['company_reserver']==CR){?> checked="checked" / <? } ?> />
                                          CR </label>
                                        <label>
                                        <input name="radiobutton" type="radio" value="SH" <? if ($row['company_reserver']==SH){?> checked="checked" / <? } ?> />
                                          SH </label>
                                        <label>
                                        <input name="company_reserver" type="radio" value="CRR"<? if ($row['company_reserver']==CRR){?> checked="checked" / <? } ?> />
                                          CRR
                                          <input name="company_reserver" type="radio" value="CFP"<? if ($row['company_reserver']==CFP){?> checked="checked" / <? } ?> />
                                        </label>
                                          CFP
                                          <label>
                                            <input name="company_reserver" type="radio" value="no" <? if ($row['company_reserver']==no){?> checked="checked" / <? } ?> />
                                        </label>
                                          อื่นๆ</strong></div></td>
                              </tr>
                              <tr>
                                <td colspan="3" align="right" bgcolor="#FFFFFF"><label>
                                    <div align="left"><strong>รายละเอียดการขอบริการ</strong><br />
                                        <textarea name="detail_reserver" cols="50" rows="5" style="background-color:#FFEAFF"><?=$row['detail_reserver'];echo "วันที ".displaydate($row['date_go_reserver'])." เวลาออก $time_go น. เวลาเข้า $time_back น.";  ?>
                  </textarea>
                                    </div>
                                  </label></td>
                              </tr>
                              <tr>
                                <td colspan="3" align="right" bgcolor="#FFFFFF"><label>
                                    <div align="left"><strong>สถานที่
                                      <label>
                                          <input name="stetus_go_reserver" type="text" id="stetus_go_reserver" style="background-color:#DDEEFF" size="35" value="<?=$row['stetus_go_reserver']?>" />
                                          </label>
                                      &nbsp;จำนวนผู้โดยสาร</strong>
                                        <input name="num_passenger_reserver" type="text" size="5" value="<?=$row['num_passenger_reserver']?>" />
                                        <strong> คน </strong></div>
                                  </label></td>
                              </tr>
                              <tr>
                                <td colspan="3" align="right" bgcolor="#FFFFFF"><label>
                                    <div align="left"><strong>ชื่อผู้ร่วมเดินทาง</strong> <br />
                                        <textarea name="passenger_name_reserver" cols="50" rows="3" style="background-color:#E8FFE8"><?=$row['passenger_name_reserver']?>
                  </textarea>
                                    </div>
                                  </label></td>
                              </tr>
                              <tr>
                                <td colspan="3"><label>
                                    <div align="left"><strong>จุดขึ้นรถ</strong> <br />
                                        <input name="stetus_reserver" type="text" size="50" value="<?=$row['stetus_reserver']?>" />
                                    </div>
                                  </label></td>
                              </tr>
                              <tr>
                                <td><label> <strong>ชื่อผู้ขอบริการ</strong> <br />
                                      <input type="text" name="id_name" value="<?=$row['id_name']?>" />
                                  &nbsp;</label></td>
                                <td colspan="2"><strong>เบอร์ติดต่อ</strong><br />
                                    <input name="tel_reserver" type="text" id="tel_reserver" value="<?=$row['tel_reserver']?>" /></td>
                              </tr>
                              <tr>
                                <td colspan="3" bgcolor="#00CCFF"><div align="center"></div></td>
                              </tr>
                              <tr>
                                <td bgcolor="#FFFFFF"><img src="image/2.jpg" /></td>
                                <td colspan="2">&nbsp;</td>
                              </tr>
                              <tr>
                                <td colspan="3" bgcolor="#FFFFFF"><? $sqlE="select * from reserver_car where date_go_reserver='$row[date_go_reserver]' and name_approve='อนุมัติ' order by id_reserver desc";
$queryE=mysql_query($sqlE) or die ("ติดต่อไม่ได้2");
$numE=mysql_num_rows($queryE);
if ($numE!=0){
?>
                                    <table width="100%" border="0">
                                      <tr>
                                        <td width="22%" bgcolor="#996600"><div align="center" class="style27">เวลา</div></td>
                                        <td width="18%" bgcolor="#996600"><div align="center" class="style27">รถ</div></td>
                                        <td width="37%" bgcolor="#996600"><div align="center" class="style27">พนักงาน</div></td>
                                        <td width="23%" bgcolor="#996600"><div align="center" class="style27">สถานที่</div></td>
                                      </tr>
                                      <?
for ($i=1;$i<=$numE;$i++){	
$rowE=mysql_fetch_array($queryE);
				?>
                                      <tr>
                                        <td bgcolor="#FFD784"><span class="style26">วันนี้เวลา</span>
                                            <?=$rowE['time_go_reserver']?></td>
                                        <td bgcolor="#FFD784"><?=$rowE['farm_id_car']
?></td>
                                        <td bgcolor="#FFD784"><? $sqls="select * from driver_car where id_driver='$rowE[id_driver]'";
						$results=mysql_query($sqls) or die ("ติดต่อฐานไม่ได้3");
						$rows=mysql_fetch_array($results);
						echo $rows['name_driver'];?>
                                        </td>
                                        <td bgcolor="#FFD784"><?=$rowE['stetus_go_reserver']?></td>
                                      </tr>
                                      <? } ?>
                                    </table>
                                  <? } ?>
                                </td>
                              </tr>
                              <tr>
                                <td bgcolor="#D9FFFF"><div align="center">ผู้จัดการฝ่ายผู้ขอบริการ</div></td>
                                <td width="39%"><label>
                                  <input name="name_approve" type="radio" value="อนุมัติ" <? if  ($row['name_approve']=="อนุมัติ"){?>checked="checked" <? } ?>/>
                                  อนุมัติ
                                  <input name="name_approve" type="radio" value="รอดำเนินงาน" <? if  ($row['name_approve']=="รอดำเนินงาน"){?>checked="checked" <? } ?>/>
                                  รอดำเนินงาน </label></td>
                                <td width="34%" valign="top">&nbsp;</td>
                              </tr>
                              <tr>
                                <td bgcolor="#D9FFFF"><div align="center">หมายเลขรถ</div></td>
                                <?
$sql1="select * from car";
$query1=mysql_query($sql1) or die ("ติดต่อไม่ได้4");
$num1=mysql_num_rows($query1);
		 ?>
                                <td><select name="farm_id_car">
                                    <option value="0">รายการรถ</option>
                                    <? 
for ($i=0;$i<$num1;$i++){		  
	$row1=mysql_fetch_array($query1);
			?>
                                    <option value="<?=$row1['farm_id_car']?>"<? if ($row['farm_id_car']==$row1['farm_id_car']){echo "selected";} ?>>
                                      <?=$row1['farm_id_car']?>
                                    </option>
                                    <? }?>
                                  </select>
                                </td>
                                <td width="34%" valign="top">&nbsp;</td>
                              </tr>
                              <?
$sqlQ="select * from driver_car";
$queryQ=mysql_query($sqlQ) or die ("ติดต่อไม่ได้5");
$numQ=mysql_num_rows($queryQ);

		 ?>
                              <tr>
                                <td bgcolor="#D9FFFF"><div align="center">พนักงานขับรถ</div></td>
                                <td><select name="id_driver">
                                    <option value="0">พนักงานขับรถ</option>
                                    <? 
for ($i=0;$i<$numQ;$i++){		  
	$rowQ=mysql_fetch_array($queryQ);
			?>
                                    <option value="<?=$rowQ['id_driver']?>" <? if ($row['id_driver']==$rowQ['id_driver']){echo "selected";} ?>>
                                    <?=$rowQ['name_driver']?>
                                    </option>
                                    <? }?>
                                </select></td>
                                <td width="34%" valign="top">&nbsp;</td>
                              </tr>
                              <tr>
                                <td width="27%">&nbsp;</td>
                                <td><label>
                                  <input type="submit" name="Submit" value="บันทึกรายการ" size="25" />
                                  <input type="hidden" name="id_reserver" value="<?=$row['id_reserver']?>" />
                                  <input type="hidden" name="id" value="<?=$_GET['id']?>" />
                                </label></td>
                                <td width="34%" valign="top">&nbsp;</td>
                              </tr>
                          </table></td>
                        </tr>
                      </table>
                      <br />
                  </form></td>
              </tr>
            </table>
            <br />
            <br />
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
</table>
<p>&nbsp;</p>
<br />
</body>
</html>
