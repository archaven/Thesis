<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<title>ö�����������ԡ��</title>
<link rel="stylesheet" type="text/css" href="../lib/web.css">
<style type="text/css">
<!--
.style1 {color: #0066FF}
.style33 {color: #CC6600}
.style2 {font-size: 16px;
	font-weight: bold;
}
.style21 {color: #666666}
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
          <td valign="top">
            <span class="style33"><br />
            | <a href="add_car.php?id=<?=$id?>">����ö����</a>| <a href="show_car.php?id=<?=$id?>">��Ѻ��ا��¡��ö</a> | <a href="add_driver.php?id=<?=$id?>">������ѡ�ҹ�Ѻö</a>| <a href="show_driver.php?id=<?=$id?>">��Ѻ��ا��¡�þ�ѡ�ҹ</a></span><br />
              <br />
              <table width="800" border="0" align="left" cellpadding="1" cellspacing="1" class="square">
                <tr>
                  <td colspan="5" bgcolor="#99CC00"><span class="style2">ö���������ԡ��</span></td>
                </tr>
                <tr>
                  <td width="117" bgcolor="#E5E5E5"><div align="center"><span class="style1">�ӴѺ</span></div></td>
                  <td width="433" bgcolor="#E5E5E5"><div align="center" class="style1">��������´</div></td>
                  <td width="119" bgcolor="#E5E5E5"><div align="center" class="style1">����</div></td>
                  <td width="65" bgcolor="#E5E5E5"><div align="center"><span class="style1">��Ѻ��ا</span></div></td>
                  <td width="48" bgcolor="#E5E5E5"><div align="center" class="style1">ź</div></td>
                </tr>
                <?						 include "connect.php";
		    		    $sql="select * from car ";
						$result=mysql_query($sql) or die ("�Դ��Ͱҹ�����");
						$num=mysql_num_rows($result);
for($i=1;$i<=$num;$i++)
   {
$row = mysql_fetch_array($result);
		?>
                <tr>
                  <td bgcolor="#EAEAEA" align="center"><? echo "$i."; ?></td>
                  <td valign="top" bgcolor="#EAEAEA"><div align="left"><? echo "������ <font color=green>$row[brand_car]&nbsp;</font>��� <font color=6699ff>$row[model_car]</font><br>������:<font color=999900>$row[type_car]</font>";
             ?></div></td>
                  <td bgcolor="#EAEAEA"><div align="center"><span class="style21">
				<? echo $row['farm_id_car']; ?>
				  </span></div></td>
                  <td bgcolor="#EAEAEA"><div align="center"><a href="edit_car.php?id_car=<?=$row['id_car']?>&id=<?=$_GET['id']?>">��Ѻ��ا</a></div></td>
                  <td bgcolor="#EAEAEA"><div align="center"><a href="delete_car.php?id_car=<?=$row['id_car']?>&amp;id=<?=$id?>">[ź]</a></div></td>
                </tr>
                <? } ?>
              </table>
              <br />

            � 
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
<p class="style119">&nbsp;</p>
<br />
<br />
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<table width="100%" border="0">
  <tr>
    <td valign="top"><? include ("backdown.php");?>
    </td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
