<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<title>�����š�èͧö</title><link rel="stylesheet" type="text/css" href="../lib/web.css">
<style type="text/css">
<!--
.style21 {color: #666666}
.style24 {color: #FFFFFF}
.style31 {color: #000033}
.style32 {color: #003399}
.style1 {color: #0066FF}
.style33 {	font-size: 16px;
	font-weight: bold;
}
.style34 {color: #CC6600}
.style36 {color: #333333; font-weight: bold; }
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
          <td valign="top"><span class="style34"><br />
              | <a href="add_car.php?id=<?=$_GET['id']?>">����ö����</a>| <a href="show_car.php?id=<?=$_GET['id']?>">��Ѻ��ا��¡��ö</a> | <a href="add_driver.php?id=<?=$_GET['id']?>">������ѡ�ҹ�Ѻö</a>| <a href="show_driver.php?id=<?=$_GET['id']?>">��Ѻ��ا��¡�þ�ѡ�ҹ</a></span><br />
            <br />
            <form action="save_edit_car.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
              <div align="left">
                <table width="800" border="0" align="left" cellpadding="2" cellspacing="2" class="square2">
                  <tr>
                    <td colspan="3" align="right" bgcolor="#B1C3D9"><div align="left"><strong>��䢢�����ö</strong></div></td>
                  </tr>
                  <?					 include "connect.php";
		    		    $sql="select * from car where id_car='$_GET[id_car]'";
						$result=mysql_query($sql) or die ("�Դ��Ͱҹ�����");
						$num=mysql_num_rows($result);
						$row = mysql_fetch_array($result);
						$farm_id_car=$row['farm_id_car'];
						$type_car=$row['type_car'];
						$reg_car=$row['reg_car'];
						$brand_car=$row['brand_car'];
						$model_car=$row['model_car'];
						$color_car=$row['color_car'];
					
		?>
                  <tr>
                    <td align="right">����ö</td>
                    <td><input name="farm_id_car" type="text" id="farm_id_car" value="<?=$farm_id_car?>" />
                        </label></td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td width="22%" align="right">������ö</td>
                    <td width="65%"><label>
                      <select name="type_car">
                        <option value="-" >���͡��¡��</option>
                        <option value="ö��"<? if ($type_car=="ö��"){echo "selected";}?>>ö��</option>
                        <option value="ö��к�" <? if ($type_car=="ö��к�"){echo "selected";}?>>ö��к�</option>
                        <option value="ö���" <? if ($type_car=="ö���"){echo "selected";}?>>ö���</option>
                        <option value="ö�๡���ʧ��" <? if ($type_car=="ö�๡���ʧ��"){echo "selected";}?>>ö�๡���ʧ��</option>
                      </select>
                    </label></td>
                    <td width="13%">&nbsp;</td>
                  </tr>
                  <tr>
                    <td align="right">����¹</td>
                    <td><label>
                      <input name="reg_car" type="text" id="reg_car" value="<?=$reg_car?>" />
                    </label></td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td align="right">������</td>
                    <td><label>
                       <select name="brand_car" id="brand_car">
                      <option value="-">������ö</option>
                      <option value="toyota">Toyota</option>
                      <option value="isuzu">Isuzu</option>
                      <option value="honda">Honda</option>
                      <option value="hyundai">Hyundai</option>
                      <option value="ford">Ford</option>
                      <option value="mitsubishi">Mitsubishi</option>
                      <option value="mazda">Mazda</option>
                    </select>
                    </label></td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td align="right">���</td>
                    <td><label>
                      <input name="model_car" type="text" id="model_car" value="<?=$model_car?>" />
                    </label></td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td align="right">��ö</td>
                    <td><label>
                      <select	name="color_car" id="color_car" style="width:20%">
                        <option value="0"	selected="selected">�ء��</option>
                        <option value="7" <? if ($color_car=="7"){echo "selected";}?> >���</option>
                        <option value="2" <? if ($color_car=="2"){echo "selected";}?> >����</option>
                        <option value="13" <? if ($color_car=="13"){echo "selected";}?> >����</option>
                        <option value="3" <? if ($color_car=="3"){echo "selected";}?> >�Թ</option>
                        <option value="12" <? if ($color_car=="12"){echo "selected";}?> >����</option>
                        <option value="8" <? if ($color_car=="8"){echo "selected";}?>>��</option>
                        <option value="1" <? if ($color_car=="1"){echo "selected";}?> >ᴧ</option>
                        <option value="6" <? if ($color_car=="6"){echo "selected";}?> >�ͧ</option>
                        <option value="4" <? if ($color_car=="4"){echo "selected";}?> >��</option>
                        <option value="5" <? if ($color_car=="5"){echo "selected";}?> >����Թ</option>
                        <option value="14" <? if ($color_car=="14"){echo "selected";}?> >��ӵ��</option>
                        <option value="11" <? if ($color_car=="11"){echo "selected";}?> >���</option>
                        <option value="10" <? if ($color_car=="10"){echo "selected";}?> >��ǧ</option>
                        <option value="9" <? if ($color_car=="9"){echo "selected";}?> >����ͧ</option>
                      </select>
                    </label>
                    	
                    </td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td><div align="right">�Ҿ��Сͺ</div></td>
                    <td><label>
                      <input name="attach" type="file" id="picture_car" />
                    </label></td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td><label>
                      <input type="submit" name="Submit" value="�ѹ�֡������" />
                      <input type="hidden" name="id_car" value="<?=$id_car?>" />
                      <input type="hidden" name="id"  value="<?=$_GET['id']?>"/>
                    
                    </label></td>
                    <td>&nbsp;</td>
                  </tr>
                </table>
                <span class="style119"> </span></div>
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
<br />
</body>
</html>
