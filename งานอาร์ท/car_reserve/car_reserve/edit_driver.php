<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<title>เพิ่มรายการพนักงานขับรถ</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<link rel="stylesheet" type="text/css" href="../lib/web.css">

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
          <td valign="top"><span class="style33">| <a href="add_car.php?id=<?=$_GET['id']?>">เพิ่มรถใหม่</a>| <a href="show_car.php?id=<?=$_GET['id']?>">ปรับปรุงรายการรถ</a> | <a href="add_driver.php?id=<?=$_GET['id']?>">เพิ่มพนักงานขับรถ</a>| <a href="show_driver.php?id=<?=$_GET['id']?>">ปรับปรุงรายการพนักงาน</a></span><br />
			<?
					 include "connect.php";
		    		    $sql= "select * from driver_car where id_driver='$_GET[id_driver]'";
						$result=mysql_query($sql) or die ("ติดต่อฐานไม่ได้");
						$num=mysql_num_rows($result);
						$row = mysql_fetch_array($result);
					?>			
            <form action="save_edit_driver.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
              <table width="800" border="0" align="left" cellpadding="2" cellspacing="2" class="square2">
                <tr>
                  <td colspan="3" align="right" bgcolor="#B1C3D9"><div align="left"><strong>เพิ่มรายการพนักงานขับรถ</strong></div></td>
                </tr>
                <tr>
                  <td align="right">&nbsp;</td>
                  <td>         <input type="hidden" name="office_driver"  value="สำนักงานฟาร์ม" />
                                      <div align="justify"></div></td>
                  <td><div align="left"></div></td>
                </tr>
                <tr>
                  <td align="right"><p>ชื่อ</p>
                  <p>นามสกุล</p></td>
                  <td><label>
                    
                      <div align="left">
                        <p>
                        <input name="name_driver" type="text" id="name_driver" size="20" value="<?=$row[name_driver]?>" />
                        <script type = "text/javascript">
                        $('input[name=name_driver]').change(function() {
                        	$val = $('input[name=name_driver]').val();
                            $val = $trim($val);
                            if ($val.len == 0) {
                            		alert('กรุณาใส่ค่า')
                            }
                        });
						</script>
                        </p>
                        <p>
  <input name="lastname_driver" type="text" id="lastname_driver" value="<?=$row[lastname_driver]?>" />
                        </p>
                      </div>
                  </label></td>
                  <td><div align="left"></div></td>
                </tr>
                <tr>
                  <td width="23%" align="right">ตำแหน่ง</td>
                  <td width="44%"><label>
                    
                      <div align="left">
                        <input name="position_driver" type="text" id="position_driver"  value="<?=$row['position_driver']?>"/>
                        </div>
                  </label></td>
                  <td width="33%"><div align="left"></div></td>
                </tr>
                <tr>
                  <td align="right">เบอร์โทร</td>
                  <td><label>
                    
                      <div align="left">
                        <textarea name="detail_driver" cols="30" rows="3" id="detail_driver"> <?=$row['detail_driver']?>
                        </textarea>
                        </div>
                  </label></td>
                  <td><div align="left"></div></td>
                </tr>
                <tr>
                  <td><div align="right">ภาพประกอบ</div></td>
                  <td><label>
                    
                      <div align="left">
                        <input name="attach" type="file" id="attach" />
                        </div>
                  </label></td>
                  <td><div align="left"></div></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><label>
                    
                      <input type="submit" name="Submit" value="บันทึกข้อมูล" />
                      <input type="hidden" name="id_driver"  value="<?=$id_driver?>"/>
                      <input type="hidden" name="id"  value="<?=$id?>"/>
                    </label></td>
                  <td><div align="left"></div></td>
                </tr>
              </table>
            </form></td>
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
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
