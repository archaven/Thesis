<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<title>�����š�èͧö</title><link rel="stylesheet" type="text/css" href="../lib/web.css">
<style type="text/css">
<!--
.style21 {color: #666666}
.style24 {
	color: #FFFFFF;
	font-size: 16px;
}
.style15 {font-size: 12px}
.style22 {	color: #FF0000;
	font-weight: bold;
}
.style25 {color: #999999}
.style27 {color: #FFFFFF; font-weight: bold; }
.style28 {color: #FFFF00}
.style30 {color: #FFFFFF; font-weight: bold; font-size: 16px; }
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
          <td valign="top"><div align="left"><span class="style33">
            <?
include "connect.php";
include "function_date.php";
$id=$_GET['id'];
$sqlA="select * from member where id='$id'";
$queryA=mysql_query($sqlA) or die ("�Դ��������");
$rowA=mysql_fetch_array($queryA);
$day1=$_GET['d'];
$month1=$_GET['m'];
$year1=$_GET['y'];
$monthz=date("m"); 
$dayz=date("d"); 
$yearz=date("Y"); 
$thai2 ="$year1-$month1-$day1";
$thaiz ="$yearz-$monthz-$dayz";
?></span>
              <form id="form2" name="form2" method="post" action="save_reserver.php">
                <table width="800" border="0" cellpadding="5" cellspacing="1" class="square">
                  <tr>
                    <td width="16%" colspan="4" align="right" bgcolor="#3E9EFF"><div align="center" class="style24">
                        <div align="left"><span class="style27">�ͺ�ԡ���ҹ��˹�</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                    </div></td>
                  </tr>
                  <tr>
                    <td colspan="4" align="right" bgcolor="#EBEBEB"><div align="left"><strong>����ѷ���ͺ�ԡ��</strong><br />
                            <label>
                            <input name="company_reserver" type="radio" value="CDF" checked="checked" />
                            <strong> CDF </strong></label>
                            <strong>
                            <label>
                            <input name="company_reserver" type="radio" value="CR" />
                              CR </label>
                            <label>
                            <input name="company_reserver" type="radio" value="SH" />
                              SH </label>
                            <label>
                            <input name="company_reserver" type="radio" value="CRR" />
                              CRR
                              <input name="company_reserver" type="radio" value="CFP" />
                            </label>
                              CFP
                              <label>
                                <input name="company_reserver" type="radio" value="˹��§ҹ��¹͡" />
                            </label>
                              ����</strong></div></td>
                  </tr>
                  <tr>
                    <td colspan="4" align="right" bgcolor="#FFFFFF"><label> </label>
                        <div align="left"><strong>��������´��âͺ�ԡ��</strong><br />
                            <textarea name="detail_reserver" cols="50" rows="5" style="background-color:#FFEAFF"></textarea>
                      </div></td>
                  </tr>
                  <tr>
                    <td colspan="4" align="right" bgcolor="#FFFFFF"><label> </label>
                        <div align="left"><strong>ʶҹ���
                          <label>
                              <input name="stetus_go_reserver" type="text" id="stetus_go_reserver" style="background-color:#DDEEFF" size="35" />
                              </label>
                          &nbsp;�ӹǹ��������</strong>
                            <input name="num_passenger_reserver" type="text" size="5" />
                            <strong> �� </strong></div></td>
                  </tr>
                  <tr>
                    <td colspan="4" align="right" bgcolor="#FFFFFF"><label> </label>
                        <div align="left"><strong>���ͼ���Թ�ҧ </strong><span class="style25">(��س��кؤӹ�˹�� ��� �ҧ ���͹ҧ���) </span><br />
                            <textarea name="passenger_name_reserver" cols="50" rows="3" style="background-color:#E8FFE8"></textarea>
                      </div></td>
                  </tr>
                  <tr>
                    <td colspan="4" align="right" bgcolor="#FDF0D5"><div align="left"><span class="style15"> <strong>�ѹ�����͡�Թ�ҧ</strong> <br />
                            <input name="date" type="date" value="<?php echo date('Y-m-d'); ?>" min="<?php echo date('Y-m-d'); ?>" />
                                
                              <select name="hours_go">
                                <option value="" selected="selected">�������</option>
                                <option value="00">00</option>
                                <? for($i=1;$i<=24;$i++) { ?>
                                <option value = "<?=$i ?>" >
                                <?=$i ?>
                                </option>
                                <?	}	?>
                              </select>
                              <select name="minutes_go">
                                <option value="">�ҷ�</option>
                                <option value="00">00</option>
                                <? for($i=1;$i<=59;$i++) { ?>
                                <option value = "<?=$i ?>" >
                                <?=$i ?>
                                </option>
                                <?	}	?>
                              </select>
                    </span><br />
                    </div></td>
                  </tr>
                  <tr>
                    <td colspan="4" align="right" bgcolor="#DCE3FC"><div align="left"><span class="style15"> <strong>�ѹ���ҡ�Ѻ</strong> <br />
                              <select name="day_back">
                                <option value="">�ѹ</option>
                                <? for($i=1;$i<=31;$i++) { ?>
                                <option value = "<?=$i ?>" <? if ($i==$day1) {echo "selected";} ?> >
                                <?=$i ?>
                                </option>
                                <?	}	?>
                              </select>
                              <select name="month_back">
                                <option value="">��͹</option>
                                <? 
	   $monthname=array("","���Ҥ�","����Ҿѹ�","�չҤ�","����¹","����Ҥ�","�Զع�¹","�á�Ҥ�","�ԧ�Ҥ�","�ѹ��¹","���Ҥ�","��Ȩԡ�¹","�ѹ�Ҥ�");
	   for($i=1;$i<=12;$i++) { ?>
                                <option value = "<?=$i ?>" <? if ($i==$month1) {echo "selected";} ?> >
                                <?=$monthname[$i] ?>
                                </option>
                                <?	}	?>
                              </select>
                              <select name="year_back">
                                <option value="">��</option>
                                <? for($i=date("Y");$i>=date("Y")-50;$i--){ ?>
                                <option value = "<?=$i ?>" <? if ($i==$year1) {echo "selected";} ?> >
                                <?=($i+543) ?>
                                </option>
                                <?	}	?>
                                <!--����ѧ��� Date ����Ҫ���㹡����-->
                              </select>
                              <select name="hours_back">
                                <option value="" selected="selected">�������</option>
                                <option value="00">00</option>
                                <? for($i=1;$i<=24;$i++) { ?>
                                <option value = "<?=$i ?>" >
                                <?=$i ?>
                                </option>
                                <?	}	?>
                              </select>
                              <select name="minutes_back">
                                <option value="">�ҷ�</option>
                                <option value="00">00</option>
                                <? for($i=1;$i<=59;$i++) { ?>
                                <option value = "<?=$i ?>" >
                                <?=$i ?>
                                </option>
                                <?	}	?>
                              </select>
                    </span></div></td>
                  </tr>
                  <tr>
                    <td colspan="4"><label> <strong>�ش���ö</strong> <br />
                          <input name="stetus_reserver" type="text" size="50" />
                    </label></td>
                  </tr>
                  <tr>
                    <td height="44" colspan="4"><label><strong>����-ʡ�� ���ͺ�ԡ��</strong><br />
					<? $nameA="$rowA[name] $rowA[lastname]";
					echo $nameA; ?>&nbsp;&nbsp;&nbsp;
				
                          <input type="hidden" name="id_name" value="<?=$nameA?>" readonly="readonly" />
                     <?
				 $sql="select department_id from member where id=$id";
                 $query=mysql_query($sql) or die ("�Դ��������");
                 $num=mysql_num_rows($query);
                     for ($i=1;$i<=$num;$i++)
					         {	
                                $row=mysql_fetch_array($query); 
								  $department_id=$row['department_id'];
							}	   	
				 $sql="select department_name from department where department_id=$department_id";
                 $query=mysql_query($sql) or die ("�Դ��������");
                 $num=mysql_num_rows($query);
                     for ($i=1;$i<=$num;$i++)
					         {	
                                $row=mysql_fetch_array($query); 
								  $department_name=$row['department_name'];
							}	   			
							echo  "[$department_name]";
					//////////////////////////////////////////////////////////////////////////////////////////////////////////////////		
				?>
                <br /> <br />
                        <strong>�����õԴ���</strong>
                        <input name="tel_reserver" type="text" id="tel_reserver" /></td>
                  </tr>
                  <tr>
                    <td width="17%">&nbsp;</td>
                    <td colspan="3"><label>
                      <input type="submit" name="Submit" value="�觤Ӣ�" size="25" />
                      <input type="hidden" name="id" value="<?=$id?>" />
                    </label></td>
                  </tr>
                </table>
              </form>
              <br />
          </div></td>
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
  <br />
  <br />
</p>
<br />
<br />
<br />
</body>
</html>
