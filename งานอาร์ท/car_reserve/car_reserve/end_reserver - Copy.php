<? session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<title>รับเรื่องการจอง</title><link rel="stylesheet" type="text/css" href="lib/web.css">
<style type="text/css">
<!--
.style15 {font-size: 12px}
.style16 {
	color: #0066FF;
	font-weight: bold;
}
.style19 {color: #333333}
.style20 {
	color: #0033FF;
	font-weight: bold;
}
.style33 {color: #CC6600}
.style24 {color: #666666}
.style41 {color: #000000}
-->
</style>
</head>
<body>
<p>
  <?
$dayz=$_GET['d'];
$monthz=$_GET['m'];
$yearz=$_GET['y'];
$thaiz = "$yearz-$monthz-$dayz";
include "connect.php";
include "function_date.php";
$id_reserver=$_GET['id_reserver'];
$sql="select * from reserver_car where id_reserver=$id_reserver";
$query=mysql_query($sql) or die ("ติดต่อไม่ได้");
$row=mysql_fetch_array($query);

$datee = $row['date_go_reserver'];	 
$y_=substr($datee,0,4)+543;
$m_=substr($datee,5,2);
$d_=substr($datee,8,2);
$tot=$d_.'/'.$m_.'/'.$y_;

$detail_ =$row['detail_reserver'];
/////////////////////////////////////////////////////////////////////////////////////////
$company = $row['company_reserver'];
$location = $row['stetus_go_reserver'];
$qty = $row['num_passenger_reserver'];
$name_go = $row['passenger_name_reserver'];
$kurn = $row['stetus_reserver'];
$kor_name = $row['id_name'];
$tel = $row['tel_reserver'];
$comment = $row['comment'];
/////////////////////////////////////////////////////////////////////////////////////////
$time_go=substr($row[time_go_reserver],0,5);
$time_back=substr($row[time_back_reserver],0,5);
?>
</p>
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
          <td valign="top"><form id="form1" name="form1" method="post" action="save_end_reserver.php">
              <table width="700" border="0" align="center" cellpadding="1" cellspacing="2">
  <tr>
    <td valign="top"><table width="691" border="0" align="center" cellpadding="2" cellspacing="10" class="square2">
      <tr>
        <td colspan="2" align="right" bgcolor="#FFFFFF"><div align="center"><!--<img src="../images/50y.gif" width="190" height="103" />--><span class="style16">ขอบริการยานพาหนะ</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="style19">วันที่ขอ <span class="style41">
          <? 	echo $tot; ?>
          </span></span></div></td>
        </tr>
      <tr>
        <td colspan="2" align="right" bgcolor="#EBEBEB"><div align="left"><strong>บริษัทที่ขอบริการ</strong><br />
          <label>
            <input name="company_reserver" type="radio" value="CDF" <? if ($company=='CDF'){?> checked="checked" / <? } ?>/>
            <strong>            CDF          </strong></label>
          <strong>
            <label>
              <input name="company_reserver" type="radio" value="CR" <? if ($company=='CR'){?> checked="checked" / <? } ?> />
              CR              </label>
            <label>
              <input name="radiobutton" type="radio" value="SH" <? if ($company=='SH'){?> checked="checked" / <? } ?> />
              SH              </label>
            <label>
              <input name="company_reserver" type="radio" value="CRR"<? if ($company=='CRR'){?> checked="checked" / <? } ?> />
              CRR
              <input name="company_reserver" type="radio" value="CFP"<? if ($company=='CFP'){?> checked="checked" / <? } ?> />
              </label>
            CFP 
            <label>
             <input name="company_reserver" type="radio" value="no" <? if ($company=='no'){?> checked="checked" / <? } ?> />
              </label>
            อื่นๆ</strong></div></td>
      </tr>
      <tr>
        <td colspan="2" align="right" bgcolor="#FFFFFF"><label>
          <div align="left"><strong>รายละเอียดการขอบริการ</strong><br />
            <textarea name="detail_reserver" cols="50" rows="5" style="background-color:#FFEAFF"  ><? echo "$detail_ วันที $tot เวลาออก $time_go น. เวลาเข้า $time_back น.";  ?></textarea>
            </div>
          </label></td>
          </tr>
      <tr>
		<td colspan="4">
							  <table>
							  <tr>
                                <td colspan="2" align="left" bgcolor="#FFFFFF" width="50%">
								<div align="left" class="ui-widget">
									<table>
									<tr><td>
									<strong>สถานที่</strong>
									<input name="stetus_go_reserver" type="text" id="stetus_go_reserver" 
									style="background-color:#DDEEFF" size="35" value="<?=$row['stetus_go_reserver']?>" 
									title="กรุณากรอก สถานที่" />
									<p class="error" id="stetus_go_reserver_p"></p></td>
									</tr></table>
									</div>
								
								</td>
								</tr></table>
		</td>
	  </tr><tr>
	    <td colspan="4">
							  <table>
							  <tr>
								<td  colspan="2" align="left" bgcolor="#FFFFFF" width="50%">
								<label><strong> จำนวนผู้โดยสาร</strong></label>
								<div align="left" class="ui-widget">
								    <input name="num_passenger_reserver" type="text" size="5" value="<?=$row['num_passenger_reserver']?>"
									title="กรุณากรอก จำนวนผู้โดยสาร" id="num_passenger_reserver" />
                                    <strong> คน </strong></div>
									<p class="error" id="num_passenger_reserver_p"></p>
                                  </td>
								<td>  </td>
							  </tr></table>
							  </td>
                              </tr>
      <tr>
        <td colspan="2" align="right" bgcolor="#FFFFFF"><label>
          <div align="left"><strong>ชื่อผู้ร่วมเดินทาง</strong>     <br />
            <textarea name="passenger_name_reserver" cols="50" rows="3" style="background-color:#E8FFE8"  ><?=$name_go?></textarea>
            </div>
          </label></td>
          </tr>
      

      <tr>
        <td colspan="2"><label>
          <div align="left"><strong>จุดขึ้นรถ</strong>            <br />
            <input name="stetus_reserver" type="text" size="50" value="<?=$kurn?>"   />
            </div>
          </label></td>
          </tr>
      
      <tr>
        <td width="29%"><label>
          <div align="left"><strong>ชื่อผู้ขอบริการ</strong>            <br />
            <input type="text" name="id_name" value="<?=$kor_name?>"   />
            &nbsp;</div>
        </label></td>
          <td width="71%"><div align="left"><strong>เบอร์ติดต่อ</strong><br />
            <input name="tel_reserver" type="text" id="tel_reserver" value="<?=$tel?>"  />
          </div></td>
      </tr>
      
      <tr>
        <td colspan="2" bgcolor="#FFFFFF"><div align="left">
          <strong>หมายเหตุ<br />
          </strong>
          <textarea name="comment" cols="50" rows="3" style="background-color:#E8FFE8" ><? echo $comment; ?></textarea>
        </div></td>
        </tr>
	          <?
$sqlQ="select * from driver_car";
$queryQ=mysql_query($sqlQ) or die ("ติดต่อไม่ได้");
$numQ=mysql_num_rows($queryQ);

		 ?>
      <tr>
        <td colspan="2" align="center"><label>
          <input type="submit" name="Submit" value="บันทึกรายการ" size="25" />
          <input type="hidden" name="id_reserver" value="<?=$id_reserver?>" />
          <input type="hidden" name="id" value="<?=$_GET['id']?>" />
        </label></td>
        </tr>
    </table></td>
    </tr>
</table>
<br />
</form>
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
</body>
</html>