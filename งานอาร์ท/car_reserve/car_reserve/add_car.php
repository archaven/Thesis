<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<title>เพิ่มรายการรถ</title><link rel="stylesheet" type="text/css" href="../lib/web.css">
<style type="text/css">
<!--
.style15 {font-size: 12px}
.style21 {color: #666666}
.style24 {color: #FFFFFF}
.style32 {color: #003399}
.style33 {color: #CC6600}
.style37 {color: #FF6600}
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
          <td valign="top"><form action="save_car.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
              <span class="style33"><br />
              | <a href="add_car.php?id=<?=$id?>">เพิ่มรถใหม่</a>| <a href="show_car.php?id=<?=$id?>">ปรับปรุงรายการรถ</a> | <a href="add_driver.php?id=<?=$id?>">เพิ่มพนักงานขับรถ</a>| <a href="show_driver.php?id=<?=$id?>">ปรับปรุงรายการพนักงาน</a></span><br />
            <br />
            <table width="800" border="0" align="left" cellpadding="2" cellspacing="2">
              <tr>
                <td colspan="3" align="right" bgcolor="#B1C3D9"><div align="left"><strong>เพิ่มรายการรถ</strong></div></td>
              </tr>
              <tr>
                <td align="right">&nbsp;</td>
                <td width="2%"><label></label>
                  <label></label></td>
                <td>
                  <div align="left">
                    <input type="hidden" name="office_car" value="สำนักงานฟาร์ม" />
                    </div></td>
              </tr>
              <tr>
                <td align="right">รหัสรถ</td>
                <td><label></label></td>
                <td>                  <div align="left">
                  <input name="farm_id_car" type="text" id="farm_id_car" style="background-position:bottom"/>                
                </div></td>
              </tr>
              <tr>
                <td width="22%" align="right">ประเภทรถ</td>
                <td><label></label></td>
                <td width="76%">
                  <div align="left">
                    <select name="type_car">
                      <option value="-">ประเภทรภ</option>
                      <option value="รถเก๋ง">รถเก๋ง</option>
                      <option value="รถกระบะ">รถกระบะ</option>
                      <option value="รถตู้">รถตู้</option>
                      <option value="รถอเนกประสงค์">รถอเนกประสงค์</option>
                    </select>
                  </div></td>
              </tr>
              <tr>
                <td align="right">ทะเบียน</td>
                <td><label></label></td>
                <td>                  <div align="left">
                  <input name="reg_car" type="text" id="reg_car" />                
                </div></td>
              </tr>
              <tr>
                <td align="right">ยี่ห้อ</td>
                <td><label></label></td>
                <td>
                  <div align="left">
                    <select name="brand_car" id="brand_car">
                      <option value="-">ยีห้อรถ</option>
                      <option value="toyota">Toyota</option>
                      <option value="isuzu">Isuzu</option>
                      <option value="honda">Honda</option>
                      <option value="hyundai">Hyundai</option>
                      <option value="ford">Ford</option>
                      <option value="mitsubishi">Mitsubishi</option>
                      <option value="mazda">Mazda</option>
                    </select>
                  </div></td>
              </tr>
              <tr>
                <td align="right">รุ่น</td>
                <td><label></label></td>
                <td>                  <div align="left">
                  <input name="model_car" type="text" id="model_car" />                
                </div></td>
              </tr>
              <tr>
                <td align="right">สีรถ</td>
                <td><label></label></td>
                <td>
                  <div align="left">
                    <select	name="color_car" id="color_car" style="width:20%">
                      <option value="0"			selected="selected">สีรถ</option>
                      <option value="7" >ขาว</option>
                      <option value="2" >เขียว</option>
                      <option value="13" >ครีม</option>
                      <option value="3" >เงิน</option>
                      <option value="12" >ชมพู</option>
                      <option value="8" >ดำ</option>
                      <option value="1" >แดง</option>
                      <option value="6" >ทอง</option>
                      <option value="4" >เทา</option>
                      <option value="5" >น้ำเงิน</option>
                      <option value="14" >น้ำตาล</option>
                      <option value="11" >ฟ้า</option>
                      <option value="10" >ม่วง</option>
                      <option value="9" >เหลือง</option>
                    </select>
                  </div></td>
              </tr>
              <tr>
                <td><div align="right">รูปรถ</div></td>
                <td><label></label></td>
                <td>                  <div align="left">
                  <input name="attach" type="file" id="picture_car" />                
                </div></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td><label></label></td>
                <td><div align="left">
                  <input type="submit" name="Submit" value="บันทึกข้อมูล" />
                </div></td>
              </tr>
            </table>
                <input type="hidden" name="id" value="<? echo $id; ?>" />
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
<p>&nbsp;</p>
<p><br />
</p>
</body>
</html>
