<? session_start(); ?>
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
.style11 {font-size: 12px}
.style30 {color: #990000}
.style32 {font-size: 12px; color: #006600; }
.style33 {color: #000000}
.style35 {color: #666666; font-weight: bold; }
.style31 {color: #000033}
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
include "../connect.php";
//include("../jobree/check.php");
include "function_date.php";
$sql="select * from reserver_car  where id_reserver='$id_reserver'";
$query=mysql_query($sql) or die ("�Դ��������");
$num=mysql_num_rows($query);
$row=mysql_fetch_array($query);
    $time_go=substr($row[time_go_reserver],0,5);
	   $time_back=substr($row[time_back_reserver],0,5);
?>
        <td colspan="10" bgcolor="#FFFFFF"><div align="center"><span class="style8"><img src="../images/50y.gif" width="190" height="103" /><br />
          ���������ѷ�����⪤���</span></div></td>
        </tr>
      <tr>
        <td colspan="10" bgcolor="#FFFFFF"><div align="center"><img src="image/service.jpg" width="278" height="30" /></div></td>
        </tr>
      <tr>
        <td width="26%" align="center" valign="top" bgcolor="#FFFFFF"><div align="center"><span class="style29"><span class="style28">����ѷ�ӡ�� <span class="style24">
              <?=$row['company_reserver']?>
              </span></span></span></div></td>
        <td width="25%" align="center" valign="top" bgcolor="#FFFFFF"><div align="center" class="style28"><span class="style23">          �Ţ���<span class="style24">&nbsp;0<?=$row['id_reserver']?>
          /53
          </span></span></div></td>
        <td colspan="8" align="center" valign="top" bgcolor="#FFFFFF"><div align="center" class="style28"><span class="style23">          ������ �ҹ��˹� </span></div></td>
        </tr>
      <tr>
        <td align="center" valign="top" bgcolor="#FFFFFF"><div align="center"><span class="style26"><span class="style28">�������ǡ���</span></span></div></td>
        <td colspan="9" align="center" valign="top" bgcolor="#FFFFFF"><span class="style26"><span class="style28">�ѹ��� <span class="style33">
          <? 
			$date_reser=substr($row['date_reserver'],0,10);
			//echo "$date_reser";
			echo displaydate($date_reser);
			 ?>
        </span></span></span></td>
        </tr>
      <tr>
        <td colspan="10" bgcolor="#FFFFFF"><span class="style26">          &nbsp;&nbsp;���ͺ�ԡ�� ����-ʡ�� <span class="style24">
          <?=$row['id_name']?>
          </span></span><span class="style26">          &nbsp;&nbsp;����<span class="style24">
          <?=$row['section']
?>
          </span> &nbsp;Ἱ�<span class="style24">
          <?=$row['department']?>
          </span>&nbsp;&nbsp;˹���<span class="style24">
          <?=$row['unit']
?>
          </span>&nbsp;</span></td>
        </tr>
      <tr>
        <td colspan="2" bgcolor="#CCCCCC"><div align="center" class="style26">��¡��</div></td>
        <td width="24%" bgcolor="#CCCCCC"><div align="center" class="style26">ʶҹ���</div></td>
        <td width="25%" colspan="7" bgcolor="#CCCCCC"><div align="center" class="style26">��˹����</div></td>
        </tr>
      <tr>
        <td colspan="2" align="left" valign="top" bgcolor="#FFFFFF"><p class="style26"><span class="style24">
          &nbsp;
          <?=$row['detail_reserver']." ���ռ���Թ�ҧ�ӹǹ ".$row['num_passenger_reserver']." ���� ".$row['passenger_name_reserver']."&nbsp;��ѹ�� ".displaydate($row['date_go_reserver'])."�����͡ $time_go �. ������� $time_back �.&nbsp;�ش���ö&nbsp;".$row['stetus_reserver']." �����õԴ���".$row['tel_reserver'];?>
        </span></p>
          <p class="style26">&nbsp;</p>
          <p class="style26">&nbsp;</p>
          <p class="style26">&nbsp;</p>
          </td>
        <td align="left" valign="top" bgcolor="#FFFFFF"><p class="style26"><span class="style24">
           &nbsp;
           <?=$row['stetus_go_reserver']?>
        </span></p>
          <p class="style27">&nbsp;</p>
          <p class="style27">&nbsp;</p>
          <p class="style27">&nbsp;</p>
          </td>
        <td colspan="7" align="left" valign="top" bgcolor="#FFFFFF"><p class="style26"><span class="style24">&nbsp;<? echo displaydate($row['date_reserver']);?><br /> 
          <? echo "$time_go �֧���� $time_back";?></span></p>
          <p class="style27">&nbsp;</p>
          <p class="style27">&nbsp;</p>
          <p class="style27">&nbsp;</p>
          </td>
        </tr>
      <tr>
        <td colspan="10" bgcolor="#CCCCCC"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="31%" bgcolor="#FFFFFF" class="style26"><div align="center">
              <p><br />
                </p>
              <p>&nbsp;</p>
              <p><br />
                ...............................<br />
                ���Ѵ��<br />
                .............................<br />
                �/�/�</p>
            </div></td>
            <td width="39%" bgcolor="#FFFFFF" class="style26"><div align="center">
              <p><br />
                </p>
              <p>&nbsp;</p>
              <p><br />
                ...............................<br />
                ���Ѵ��ý��¼��ͺ�ԡ��
                <br />
                .............................<br />
                �/�/�</p>
            </div></td>
            <td width="30%" bgcolor="#FFFFFF" class="style26"><div align="center">
              <p><br />
                </p>
              <p>&nbsp;</p>
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
        <td bgcolor="#FFFFFF"><span class="style26"><br />
          &nbsp;&nbsp;�ѹ��� <span class="style24"><? echo displaydate($row['date_go_reserver']);?></span></span></td>
        <td colspan="9" bgcolor="#FFFFFF"><span class="style26"><br />
          &nbsp;͹حҵ���&nbsp;<span class="style24">
          <strong>
          <span class="style33">
          <?=$row['id_name']?>
          </span></strong></span><span class="style33"><strong>&nbsp;</strong>&nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;��ö�����Ţ <span class="style35">
          <span class="style33">
          <?=$row['farm_id_car']?>
          </span></span><span class="style33"><strong>&nbsp;</strong></span>�͡�͡����ǳ�������</span></td>
        </tr>
      <tr>
        <td colspan="10" bgcolor="#FFFFFF"><span class="style26"><br />
          &nbsp;&nbsp;���� <span class="style24">
          <?=$row['detail_reserver']?>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>��������......................................</span></td>
        </tr>
      <tr>
        <td colspan="2" bgcolor="#FFFFFF"><span class="style26"><br />
          &nbsp;&nbsp;�����͡<span class="style24"> <? echo dateThai($row['check_time_go']);
?></span></span></td>
        <td colspan="8" bgcolor="#FFFFFF"><span class="style26"><br />
          &nbsp;&nbsp;������� <span class="style24"><? echo dateThai($row['check_time_back']);?></span></span></td>
        </tr>
      <tr>
        <td colspan="2" bgcolor="#FFFFFF"><span class="style26"><br />
          &nbsp;&nbsp;�Ţ�����͹�͡�ҡ����� <span class="style24">
          <?=number_format($row['num_kilo_go_reserver'])?> �������� </span></span></td>
        <td colspan="8" bgcolor="#FFFFFF"><span class="style26"><br />
          &nbsp;&nbsp;�Ţ�����Ѻ��ҿ����<span class="style24">
          <?=number_format($row['num_kilo_back_reserver'])?>
          �������� </span></span></td>
        </tr>
      <tr>
        <td colspan="10" bgcolor="#FFFFFF"><span class="style21"> &nbsp;&nbsp;��ػ�š���Թ�ҧ</span></td>
        </tr>
      <tr>
        <td colspan="10" bgcolor="#FFFFFF"><table width="100%" border="0" cellpadding="1" cellspacing="5">
          
          <tr>
            <td width="158" bgcolor="#EBEBEB" class="style27"><div align="right"><strong><span class="style11">ö�͡�ҡ���������&nbsp;</span></strong></div></td>
            <td width="240" class="style27"><span class="style11">
              <? echo dateThai($row['check_time_go']);?>
            </span></td>
            <td width="184" bgcolor="#EBEBEB" class="style27"><div align="right"><strong><span class="style11">ö��Ѻ��ҿ��������</span></strong></div></td>
            <td width="214" class="style27"><span class="style11">
              <? if ($row['date_end']=="0000-00-00 00:00:00"){echo "0000-00-00 00:00:00";}else{ echo dateThai($row['check_time_back']);}?>
            </span></td>
          </tr>
          <tr>
            <td bgcolor="#EBEBEB" class="style27"><div align="right"><strong><span class="style11">���зҧ��͹�͡�ҡ�����</span></strong></div></td>
            <td class="style27"><span class="style32">
              <?=number_format($row['num_kilo_go_reserver'])?>
              <span class="style33">&nbsp;��������</span></span></td>
            <td bgcolor="#EBEBEB" class="style27"><div align="right"><strong><span class="style11">���зҧ�����͡�Ѻ��ҿ����</span></strong></div></td>
            <td class="style27"><span class="style32">
              <? $num_kilo_back_reserver=number_format($row['num_kilo_back_reserver']);
			  		echo "$num_kilo_back_reserver"; ?>
&nbsp;              <span class="style33">��������</span></span></td>
          </tr>
          <tr>
            <td class="style27"><div align="center"></div></td>
            <td colspan="3" class="style27"><span class="style11"><strong>������зҧ�����㹡���Թ�ҧ������</strong> &nbsp;::<span class="style31">
              <? 
$sum_kilo_reserver=number_format($row['sum_kilo_reserver']);
echo "$sum_kilo_reserver"; 
	    ?>
            </span><span class="style31">��������</span></span></td>
            </tr>
          <tr>
            <td class="style27"><div align="left"></div></td>
            <td colspan="3" class="style27"><span class="style11"><strong>���ҷ����㹡���Թ�ҧ</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;::<span class="style30">
              <?
	echo "$row[sum_time_reserver]";	
		?>
              <?
//$time_x="$time[D] �ѹ $time[H] ������� $time[M]�ҷ� $time[S]�Թҷ�";		
//$sql3="UPDATE reserver_car SET sum_time_reserver='$time_x' where id_reserver=$id_reserver";
//$query3=mysql_query($sql3) or die ("Select Ques error");	
		?>
            </span></span></td>
            </tr>
          
        </table></td>
        </tr>
      <tr>
        <td colspan="10" bgcolor="#FFFFFF"><table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td bgcolor="#FFFFFF" class="style26"><div align="center">
              <p><br />
                </p>
              <p>&nbsp;</p>
              <p><br />
                .........................................<br />
                ��ѡ�ҹ�Ѻö<br />
                ...............................<br />
                �/�/�</p>
              <p><br />
              </p>
            </div></td>
            <td bgcolor="#FFFFFF" class="style26"><div align="center">
              <p><br />
                </p>
              <p>&nbsp;</p>
              <p><br />
                .........................................<br />
                ���˹�ҷ���ѡ�Ҥ�����ʹ���<br />
                ...............................<br />
                �/�/�</p>
              <p><br />
              </p>
            </div></td>
            <td bgcolor="#FFFFFF" class="style26"><div align="center">
              <p><br />
                </p>
              <p>&nbsp;</p>
              <p><br />
                .........................................<br />
                ���͹حҵ
                <br />
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
