<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<title>������¡�þ�ѡ�ҹ�Ѻö</title><link rel="stylesheet" type="text/css" href="../lib/web.css">
<style type="text/css">
<!--
.style15 {font-size: 12px}
.style21 {color: #666666}
.style24 {color: #FFFFFF}
.style32 {color: #003399}
.style33 {color: #CC6600}
.style1 {color: #0066FF}
.style2 {font-size: 16px;
	font-weight: bold;
}
.style37 {color: #FF6600}
-->
</style>
</head>
<body onload="MM_preloadImages('menu_files/ebbtcbmenu1_0.gif','menu_files/ebbtcbmenu2_0.gif','menu_files/ebbtcbmenu3_0.gif','menu_files/ebbtcbmenu4_0.gif','menu_files/ebbtcbmenu5_0.gif','menu_files/ebbtcbmenu6_0.gif')">
<form action="save_driver.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
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
                | <a href="add_car.php?id=<?=$id?>">����ö����</a>| <a href="show_car.php?id=<?=$id?>">��Ѻ��ا��¡��ö</a> | <a href="add_driver.php?id=<?=$id?>">������ѡ�ҹ�Ѻö</a>| <a href="show_driver.php?id=<?=$id?>">��Ѻ��ا��¡�þ�ѡ�ҹ</a><a href="show_driver.php?id=<?=$_GET['id']?>">�</a></span><br />
                <table width="800" border="0" align="left" cellpadding="2" cellspacing="2">
                  <tr>
                    <td colspan="3" align="right" bgcolor="#B1C3D9"><div align="left"><strong>������¡�þ�ѡ�ҹ�Ѻö</strong></div></td>
                  </tr>
                  <tr>
                    <td align="right">&nbsp;</td>
                    <td><label>
                      
                      <div align="left">
                        <input type="hidden" name="office_driver" value="�ӹѡ�ҹ�����" />
                       </div>
                    </label>
                      <label>
                        
                      <div align="left"></div>
                      </label>
                      <div align="left"></div></td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td align="right"><p>����</p>
                    <p>���ʡ��</p></td>
                    <td><label>
                      
                      <div align="left">
                        <p>
                          <input name="name_driver" type="text" id="name_driver" size="20" />
                        </p>
                        <p>
                          <label>
    <input name="lastname_driver" type="text" id="lastname_driver" />
  </label>
                        </p>
                      </div>
                      </label></td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td width="23%" align="right">���˹�</td>
                    <td width="39%"><label>
                      
                      <div align="left">
                        <input name="position_driver" type="text" id="position_driver" />
                      </div>
                    </label></td>
                    <td width="38%">&nbsp;</td>
                  </tr>
                  <tr>
                    <td align="right">��������´</td>
                    <td><label>
                      
                      <div align="left">
                          <textarea name="detail_driver" cols="30" rows="3" id="detail_driver"></textarea>
                      </div>
                    </label></td>
                    <td><div align="left"></div></td>
                  </tr>
                  <tr>
                    <td><div align="right">�Ҿ��Сͺ</div></td>
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
                           <input type="hidden" name="id" value="<? echo $id; ?>" />
                      <div align="left">
                        <input type="submit" name="Submit" value="�ѹ�֡������" />
                      </div>
                    </label></td>
                    <td><div align="left"></div></td>
                  </tr>
                </table>
                <br />
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
  <span class="style33"><br />
  </span><br />
 <br />
 <p>&nbsp;</p>
  <br />
</form>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
