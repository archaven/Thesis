<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<title>��§ҹ��èͧ</title><link rel="stylesheet" type="text/css" href="../lib/web.css">
<style type="text/css">
<!--
.style8 {
	font-family: BrowalliaUPC;
	font-size: 36px;
	font-weight: bold;
}
.style14 {
	font-family: BrowalliaUPC;
	font-size: 24px;
	color: #000000;
	font-weight: bold;
}
.style21 {font-family: BrowalliaUPC; font-size: 18px; font-weight: bold; }
.style23 {font-family: BrowalliaUPC}
.style24 {color: #666666}
.style26 {font-family: BrowalliaUPC; font-size: 18px; }
.style27 {font-size: 18px; }
.style28 {
	font-size: 22px;
	font-weight: bold;
}
.style29 {font-family: BrowalliaUPC; font-size: 24px; }
.style30 {font-size: 24px}
.style41 {color: #000000}
.style42 {font-family: BrowalliaUPC; font-size: 18px; color: #000000; }
.style43 {font-size: 18px; color: #000000; }
.style45 {color: #666666; font-weight: bold; }
-->
</style>
</head>
   <body>
<table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#CCCCCC"><table width="100%" border="1" cellpadding="0" cellspacing="0">
      <tr>
<? 
$dayz=$_GET['d'];
$monthz=$_GET['m'];
$yearz=$_GET['y'];
$thaiz = "$yearz-$monthz-$dayz";
include "connect.php";
include "function_date.php";
$sql="select * from reserver_car  where id_reserver='$id_reserver'";
$query=mysql_query($sql) or die ("�Դ��������");
$num=mysql_num_rows($query);
$row=mysql_fetch_array($query);
    $time_go=substr($row[time_go_reserver],0,5);
	   $time_back=substr($row[time_back_reserver],0,5);
?>
        <td colspan="10" bgcolor="#FFFFFF"><div align="center"><span class="style8"><!-- LOGO<img src="../images/50y.gif" width="163" height="88" />--><br />
              <span class="style30">���������ѷ�����⪤���</span></span></div></td>
        </tr>
      <tr>
        <td colspan="10" bgcolor="#FFFFFF"><div align="center"><img src="image/service.jpg" width="278" height="30" /></div></td>
        </tr>
      <tr>
        <td width="26%" align="center" valign="top" bgcolor="#FFFFFF"><div align="center"><span class="style29"><span class="style28">����ѷ�ӡ�� <span class="style24">
              <?=$row['company_reserver']?>
              </span></span></span></div></td>
        <td width="25%" align="center" valign="top" bgcolor="#FFFFFF"><div align="center" class="style28"><span class="style23">          �Ţ���<span class="style24">&nbsp;<?=$row['id_reserver']?></span></span></div></td>
        <td colspan="8" align="center" valign="top" bgcolor="#FFFFFF"><div align="center" class="style28"><span class="style23">          ������ �ҹ��˹� </span></div></td>
        </tr>
      <tr>
        <td align="center" valign="top" bgcolor="#FFFFFF"><div align="center"><span class="style26"><span class="style28">�������ǡ���</span></span></div></td>
        <td colspan="9" align="center" valign="top" bgcolor="#FFFFFF"><span class="style26"><span class="style28">�ѹ��� <span class="style41">
          <? 
			$date_reser=substr($row['date_reserver'],0,10);
			//echo "$date_reser";
			echo displaydate($date_reser);
			 ?>
        </span></span></span></td>
        </tr>
      <tr height="30px">
        <td colspan="10" bgcolor="#FFFFFF"><span class="style26">          &nbsp;&nbsp;���ͺ�ԡ�� ����-ʡ�� <span class="style45">
          <?=$row['id_name']?></span></span><span class="style26">          &nbsp;&nbsp;�ѧ�Ѵ&nbsp;<span class="style45">
          <?=$row['section']?></span></span></td>
        </tr>
      <tr>
        <td colspan="2" bgcolor="#CCCCCC"><div align="center" class="style26">��¡��</div></td>
        <td width="24%" bgcolor="#CCCCCC"><div align="center" class="style26">ʶҹ���</div></td>
        <td width="25%" colspan="7" bgcolor="#CCCCCC"><div align="center" class="style26">��˹����</div></td>
        </tr>
      <tr>
        <td colspan="2" align="left" valign="top" bgcolor="#FFFFFF"><p class="style42">
          &nbsp;&nbsp;<?=$row['detail_reserver']." ���ռ���Թ�ҧ�ӹǹ ".$row['num_passenger_reserver']." ���� ".$row['passenger_name_reserver']."&nbsp;��ѹ�� ".displaydate($row['date_go_reserver'])."�����͡ $time_go �. ������� $time_back �.&nbsp;�ش���ö&nbsp;".$row['stetus_reserver']." �����õԴ���".$row['tel_reserver'];?>
        </p>
          <p class="style42">&nbsp;</p>
          <p class="style42">&nbsp;</p>          </td>
        <td align="left" valign="top" bgcolor="#FFFFFF"><p class="style42">&nbsp;&nbsp;<?=$row['stetus_go_reserver']?>
        </p>
          <p class="style43">&nbsp;</p>
          <p class="style43">&nbsp;</p>          </td>
        <td colspan="7" align="left" valign="top" bgcolor="#FFFFFF"><p class="style42">&nbsp;&nbsp;�ѹ��� <? echo displaydate($row['date_go_reserver']);?><br /> 
            &nbsp;&nbsp;<? echo "$time_go �֧���� $time_back";?></p>
          <p class="style43">&nbsp;</p>          </td>
        </tr>
      <tr>
        <td colspan="10" bgcolor="#CCCCCC"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="31%" bgcolor="#FFFFFF" class="style26"><div align="center">
              <p><br />
                ...............................<br />
                ���Ѵ��<br />
                .............................<br />
                �/�/�</p>
              </div></td>
            <td width="39%" bgcolor="#FFFFFF" class="style26"><div align="center">
              <p><br />
                ...............................<br />
                ���Ѵ��ý��¼��ͺ�ԡ��
                <br />
                .............................<br />
                �/�/�</p>
              </div></td>
            <td width="30%" bgcolor="#FFFFFF" class="style26"><div align="center">
              <p><br />
                ...............................<br />
                ���ͼ������ԡ��<br />
                .............................<br />
                �/�/�</p>
              </div></td>
          </tr>
        </table></td>
        </tr>
      <tr>
        <td colspan="10" bgcolor="#FFFFFF"><div align="center" class="style14"><img src="image/anuyad.jpg" width="278" height="30" /></div></td>
        </tr>
      <tr>
        <td bgcolor="#FFFFFF"><div align="center"><span class="style26"><br />
  &nbsp;&nbsp;�ѹ��� <span class="style24"><? echo displaydate($row['date_go_reserver']);?></span></span></div></td>
        <td colspan="9" bgcolor="#FFFFFF"><span class="style26"><br />
          &nbsp;͹حҵ���&nbsp;<span class="style24">
          <strong>
          <?=$row['id_name']?>
          </strong></span><strong>&nbsp;&nbsp;</strong>��ö�����Ţ&nbsp;</span><span class="style45"><? echo $row[farm_id_car]; ?></span><span class="style26">&nbsp;&nbsp;����&nbsp;
		  </span>
          
          <span class="style45">
          <?
		     $sqlQ="select * from driver_car where id_driver=$row[id_driver]";
             $queryQ=mysql_query($sqlQ) or die ("�Դ��������");
             $rowQ=mysql_fetch_array($queryQ);
     	     echo "$rowQ[name_driver] $rowQ[lastname_driver]"; ?></span><span class="style26">&nbsp;��ѡ�ҹ�Ѻö<br />
&nbsp;�͡�͡����ǳ�������</span></td>
        </tr>
      <tr>
        <td colspan="10" bgcolor="#FFFFFF"><span class="style26"><br />
          &nbsp;&nbsp;���� <span class="style24">
          <span class="style41">
          <?=$row['detail_reserver']?></span></span></span></td>
        </tr>
      <tr>
        <td colspan="2" bgcolor="#FFFFFF"><span class="style26"><br />
          &nbsp;&nbsp;�����͡...................................</span></td>
        <td colspan="8" bgcolor="#FFFFFF"><span class="style26"><br />
          &nbsp;&nbsp;�������...................................</span></td>
        </tr>
      <tr>
        <td colspan="10" bgcolor="#FFFFFF"><span class="style21"> &nbsp;&nbsp;�ѹ�֡��õ�Ǩ�����ͧ��</span></td>
      </tr>
      <tr>
        <td colspan="10" bgcolor="#FFFFFF"><table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td class="style27"><label>
              <div align="right">
                <input type="checkbox" name="checkbox" value="checkbox" />
                </div>
            </label></td>
            <td class="style27"><span class="style23">����ѹ����ͧ</span></td>
            <td class="style27"><div align="right">
              <input type="checkbox" name="checkbox6" value="checkbox" />
            </div></td>
            <td class="style27"><span class="style23">����ѹ�ä</span></td>
          </tr>
          <tr>
            <td class="style27"><div align="right">
              <input type="checkbox" name="checkbox2" value="checkbox" />
            </div></td>
            <td class="style27"><span class="style23">����ѹ��Ѫ</span></td>
            <td class="style27"><div align="right">
              <input type="checkbox" name="checkbox7" value="checkbox" />
            </div></td>
            <td class="style27"><span class="style23">����ѹ�ǧ������������</span></td>
          </tr>
          <tr>
            <td class="style27"><div align="right">
              <input type="checkbox" name="checkbox3" value="checkbox" />
            </div></td>
            <td class="style27"><span class="style23">�礹�ӡ����ẵ�����</span></td>
            <td class="style27"><div align="right">
              <input type="checkbox" name="checkbox8" value="checkbox" />
            </div></td>
            <td class="style27"><span class="style23">����ѹ����͹��/���;ѡ���</span></td>
          </tr>
          <tr>
            <td class="style27"><div align="right">
              <input type="checkbox" name="checkbox4" value="checkbox" />
            </div></td>
            <td class="style27"><span class="style23">�ѭ�ҳ俵�ҧ�</span></td>
            <td class="style27"><div align="right">
              <input type="checkbox" name="checkbox9" value="checkbox" />
            </div></td>
            <td class="style27"><span class="style23">��Ҿ�ҧ/���ҧ</span></td>
          </tr>
          <tr>
            <td width="200" class="style27"><div align="right">
              <input type="checkbox" name="checkbox5" value="checkbox" />
            </div></td>
            <td width="200" class="style27"><span class="style23">��÷ӧҹ�ͧ��Ѫ/�á</span></td>
            <td width="120" class="style27"><div align="right">
              <input type="checkbox" name="checkbox10" value="checkbox" />
            </div></td>
            <td width="276" class="style27"><span class="style23">����ѹ������ԧ</span></td>
          </tr>
          
        </table></td>
        </tr>
      <tr>
        <td colspan="10" bgcolor="#FFFFFF"><table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td bgcolor="#FFFFFF" class="style26"><div align="center">
              <p><br />
              </p>
              <p><br />
                .........................................<br />
                ���͹حҵ<br />
                ...............................<br />
                �/�/�</p>
              <p><br />
              </p>
            </div></td>
            <td bgcolor="#FFFFFF" class="style26"><div align="center">
              <p><br /></p>
              <p><br />
                .........................................<br />
                ��ѡ�ҹ�Ѻö<br />
                ...............................<br />
                �/�/�</p>
              <p><br />
              </p>
            </div></td>
            <td bgcolor="#FFFFFF" class="style26"><div align="center">
              <p><br /></p>
              <p><br />
                .........................................<br />
                ���˹�ҷ���ѡ�Ҥ�����ʹ���<br />
                ...............................<br />
                �/�/�</p>
              <p><br />
              </p>
            </div></td>
            </tr>
        </table></td>
        </tr>
      
    </table></td>
  </tr>
</table>
</body>
</html>
