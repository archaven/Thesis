<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<?
$id=$_GET['id'];
include "connect.php";
include "function_date.php";
$id=$_GET['id'];
$day1=$_GET['d'];
$month1=$_GET['m'];
$year1=$_GET['y'];
$monthz=date("m"); 
$dayz=date("d"); 
$yearz=date("Y"); 
$thaiz ="$yearz-$monthz-$dayz";//;�ѹ���
$thai2 ="$year1-$month1-$day1";//;�ѹ������͡
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<title>�����š�èͧö</title><link rel="stylesheet" type="text/css" href="../lib/web.css">
<style type="text/css">
  .today  { font-family: ms sans serif; font-size: 10pt; 
            font-weight: bold; background-color: #ff6633; 
            color: #FFFFFF; border: 3 double #000000; }
  .sunday { font-family: ms sans serif; font-size: 10pt; 
            background-color: #FF0000; color: #FFFFFF; }
  .norm   { font-family: ms sans serif; font-size: 10pt; 
            background-color: #FFFFFF; color: #000000; }
.style21 {color: #666666}
.style22 {color: #FF0000;
	font-weight: bold;
}
.style30 {color: #0033FF; font-weight: bold; font-size: 14px; }
.style33 {color: #006600}
.style36 {color: #CC6600}
.style37 {color: #0066FF}
</style>
<style type="text/css">
.box {
 /*  width:1000px;
 /*   height:100px;*/
    /* ��ǹ�ͧ ����ʴ����  */
 /*   border-color:#6CF;*/
 /*   border-style:solid;*/
    /* ����ǹ�ͧ ����ʴ����  */
    /* ��ǹ�ͧ gradient */
 /*   background: rgb(254,255,255); /* Old browsers */
 /*   background: -moz-linear-gradient(top,  rgba(254,255,255,1) 0%, rgba(210,235,249,1) 100%); /* FF3.6+ */
 /*   background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(254,255,255,1)), color-stop(100%,rgba(210,235,249,1))); /* Chrome,Safari4+ */
 /*   background: -webkit-linear-gradient(top,  rgba(254,255,255,1) 0%,rgba(210,235,249,1) 100%); /* Chrome10+,Safari5.1+ */
 /*   background: -o-linear-gradient(top,  rgba(254,255,255,1) 0%,rgba(210,235,249,1) 100%); /* Opera 11.10+ */
 /*   background: -ms-linear-gradient(top,  rgba(254,255,255,1) 0%,rgba(210,235,249,1) 100%); /* IE10+ */
 /*   background: linear-gradient(to bottom,  rgba(254,255,255,1) 0%,rgba(210,235,249,1) 100%); /* W3C */
 /*   filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#feffff', endColorstr='#d2ebf9',GradientType=0 ); /* IE6-9 */
    /* �� ��ǹ�ͧ gradient */
    /* ��ǹ����ʴ� �� radius*/
    -webkit-border-radius: 0px;
    border-radius: 0px; 
   /*ʺ ��ǹ����ʴ� �� radius*/
    /*��ǹ�ͧ shadow */
    -webkit-box-shadow: 0px 0px 5px 5px rgba(200, 197, 200, 1);
    box-shadow: 0px 0px 5px 5px rgba(200, 197, 200, 1); 
     /* �� ��ǹ�ͧ shadow */
}
.style56 {color: #FF0000}
.style60 {
	font-size: 18px;
	color: #FF0000;
}
</style>

</head>
<body   bgcolor="#DFFDFF" >
<table align="center" width="1000px">
<td><div class="box" >

<table width="990px" border="0" align="center" cellpadding="0" cellspacing="0"  bgcolor="#FFFFFF">
 <tr>
    <td>  
    	<table width="990px" border="0">
      <tr align="center">
        <td height="47" valign="top"><? include ("menu.php");?></td>
      </tr>
    </table> 
    </td>
  </tr>
  <tr>
    <td><div align="center">
      <table width="990px" height="128" border="1" align="center"b bordercolor="#000000" > 
        <tr class="norm">
          <td colspan="7" align="center" bgcolor="#0066FF"><a href="<?php echo $PHP_SELF; ?>">
          <?php
/* $diffHour ��� $diffMinute ��͵���÷�����纨ӹǹ���������Шӹǹ�ҷշ��
   ᵡ��ҧ�ѹ�����ҧ����ͧ���͹��Ѻ����ͧ��������� ����ӴѺ �蹶�����Ңͧ
   ����ͧ����繵����ǡ������Ңͧ����ͧ��������� 11 ������� 15 �ҷ� ������˹� 
   $diffHour �� 11 ��С�˹� $diffMinute �� 15 㹷��������¹������
   ����ͧ���������Ѻ����ͧ����繵������ҵç�ѹ */
$diffHour = 0;
$diffMinute = 0;

  $calTime = getdate(date(mktime(date("H") + $diffHour, 
    date("i") + $diffMinute)));
  $today = $calTime["mday"];     //�ѹ���
  $month = $calTime["mon"];      //��͹
  $year = $calTime["year"];      //��

if ($dfMonth == "") {
  /* �������ա���к�����ʴ���ԷԹ�ͧ��͹���͹˹�� ��Ҩ��ʴ���ԷԹ�ͧ��͹
     �Ѩ�غѹ������������ͧ����繵� ����ѧ���� getdate() ���ҧ�ѹ���/����
     �Ѩ�غѹ�ͧ����ͧ����繵������㹵���� $calTime ��觿ѧ���蹹��Ф׹��ҡ�Ѻ��
     ���������� */
  /*
  $calTime = getdate(date(mktime(date("H") + $diffHour, 
    date("i") + $diffMinute)));
  $today = $calTime["mday"];     //�ѹ���
  $month = $calTime["mon"];      //��͹
  $year = $calTime["year"];      //��
  */
   	$dfMonth = $month;
	$dfYear = $year;
}
else {
  /* �óշ���к�����ʴ���ԷԹ�ͧ��͹/��˹����� ���ա���觵���� $today, 
     $dfMonth ��� $dfYear ��ҹ�ҷҧ query string ���� */
  if ($dfMonth == 0) {
    /* ��ҵ���� $dfMonth �� 0 ��Ҩ��ʴ���ԷԹ�ͧ��͹�ѹ�Ҥ��ͧ�շ�����
       ���һշ����ѧ�ʴ����� */
    $dfMonth = 12;
    $dfYear = $dfYear - 1;
  }
  elseif ($dfMonth == 13) {
    /* ��ҵ���� $dfMonth �� 13 ��Ҩ��ʴ���ԷԹ�ͧ��͹���Ҥ��ͧ�շ���ҡ
       ���һշ����ѧ�ʴ����� */
    $dfMonth = 1;
    $dfYear = $dfYear + 1;
  }
  //���ҧ�ѹ/���Ңͧ��͹��лշ�������к� �����㹵���� $calTime
  $calTime = getdate(date(mktime((date("H") + $diffHour), 
    (date("i") + $diffMinute), 0, $dfMonth, $today, $dfYear)));
  $today = $calTime["mday"];     //�ѹ���
  $month = $calTime["mon"];      //��͹
  $year = $calTime["year"];      //�� 
}
/*
echo $month;
echo  "<br>";
echo  $year;
echo  "<br>";
echo  $dfMonth ;
echo  "<br>";
echo  $dfYear ;
echo  "<br>";
*/
/* ���¡�ѧ���� LastDay() ����繿ѧ���蹷��������ҧ������ͧ ������ "�ӹǹ�ѹ" 
   �ͧ��͹��лշ����ʴ���ԷԹ �������㹵���� $Lday */
$Lday = LastDay($month, $year);
//�� timestamp �ͧ�ѹ��� 1 �ͧ��͹�����ʴ���ԷԹ ���㹵���� $FTime
$FTime = getdate(date(mktime(0, 0, 0, $month, 1, $year)));
//�� "�ѹ��ѻ����" (�ѹ���, �ѧ��� ���) �ͧ�ѹ��� 1 �ͧ��͹���㹵���� $wday
$wday = $FTime["wday"];

//���ҧ����ê�Դ���������纪�����͹������
$thmonthname = array("���Ҥ�", "����Ҿѹ��", "�չҤ�", "����¹", 
  "����Ҥ�", "�Զع�¹", "�á�Ҥ�", "�ԧ�Ҥ�", "�ѹ��¹", "���Ҥ�", 
  "��Ȩԡ�¹", "�ѹ�Ҥ�");

/* �ѧ���� LastDay() ������Ѻ���ѹ����ش���¢ͧ��͹/�շ���к� 
   ���͡�����ա���˹�觤���������͹/�շ���кع���ա���ѹ */
function LastDay($m, $y) {
  for ($i=29; $i<=32; $i++) {
    if (checkdate($m, $i, $y) == 0) {
      return $i - 1;
    }
  }
}
?>
          </a><img src="image/day_go.jpg" width="400" height="50" /></td>
        </tr>
        <tr class="norm">
          <td width="65" align="center"><a href="<?php echo $PHP_SELF; ?>
?today=<?php echo $today; ?>
&amp;dfMonth=<?php echo ($month - 1) ?>
&amp;dfYear=<? echo $year; ?>&id=<?=$id?>">&lt;</a> </td>
          <td align="center" colspan="5" bgcolor="#CEE1FF"><?php echo $thmonthname[$month - 1]; ?>&nbsp; <?php echo ($year + 543); ?></td>
          <td width="63" align="center"><a href="<?php echo $PHP_SELF; ?>
?today=<?php echo $today; ?>&amp;dfMonth=<?php echo ($month + 1); ?>
&amp;dfYear=<?php echo $year; ?>&id=<?=$id?>">&gt;</a></td>
        </tr>
        <tr>
          <td width="65" align="center" class="sunday">�ҷԵ��</td>
          <td width="56" align="center" class="norm">�ѹ���</td>
          <td width="54" align="center" class="norm">�ѧ���</td>
          <td width="57" align="center" class="norm">�ظ</td>
          <td width="67" align="center" class="norm">����ʺ��</td>
          <td width="60" align="center" class="norm">�ء��</td>
          <td width="63" align="center" class="norm">�����</td>
        </tr>
        <?php
$iday = 1;
//�ʴ����á�ͧ��ԷԹ
for ($i=0; $i<=6; $i++) {
  if ($i < $wday) {  //�ʴ�������ҧ��͹�ѹ��� 1 �ͧ��͹
    if ($i == 0) {     //�óշ�����ѹ�ҷԵ��
      echo "<td width=\"24\" align=\"center\" class=\"sunday\">&nbsp;</td>\n";
    }
    else {             //�óշ�����ѹ������������ѹ�ҷԵ��
      echo "<td width=\"24\" align=\"center\" class=\"norm\">&nbsp;</td>\n";
    }
  }
  else {             //�ʴ��ѹ�������á�ͧ��ԷԹ
    if ($i == 0 && ($iday != $today)) { 
      //�óշ�����ѹ�ҷԵ�� ���������ѹ�Ѩ�غѹ
	  if  ( ($month == $dfMonth && $year == $dfYear && $iday > $today))  {
      echo "<td width=\"24\" align=\"center\" class=\"sunday\"><a href=calendar_car.php?d=$iday&m=$month&y=$year&id=$id>$iday<a></td>\n";
	  } else {
		 echo " <td width=\"24\" align=\"center\" class=\"sunday\">$iday</td>\n";
	  }
    }
    elseif ($iday == $today) {  //�óշ�����ѹ�Ѩ�غѹ
      echo "<td width=\"24\" align=\"center\" class=\"today\"><a href=calendar_car.php?d=$iday&m=$month&y=$year&id=$id>$iday<a></td>\n";
    }
    else {
		//if ( ($month == $dfMonth && $year == $dfYear && $iday > $today)) {
      echo "<td width=\"24\" align=\"center\" class=\"norm\"><a href=calendar_car.php?d=$iday&m=$month&y=$year&id=$id>$iday<a></td>\n";
		//} else {
		//	echo "<td width=\"24\" align=\"center\" class=\"norm\">$iday</td>\n";
		//}
    }
    $iday++;
  }
}

//�ʴ��Ƿ������ͧ͢��ԷԹ (��ѧ�ҡ�ʴ����á����� ����������ҧ�ҡ 5 ��)
for ($j=0; $j<=4; $j++) {
  if ($iday <= $Lday) {
    echo "<tr>\n";
    for ($i=0; $i<=6; $i++) {
      if ($iday <= $Lday) {
        if ($i == 0 && ($iday != $today)) {
          echo "<td width=\"24\" align=\"center\" class=\"sunday\"><a href=calendar_car.php?d=$iday&m=$month&y=$year&id=$id>$iday<a></td>\n";
        }
        elseif ($i == 0 && ($iday == $today)) {
          echo "<td width=\"24\" align=\"center\" class=\"today\"><a href=calendar_car.php?d=$iday&m=$month&y=$year&id=$id>$iday<a></td>\n";
        }
        elseif ($iday == $today) {
		//elseif (($month == $dfMonth && $year == $dfYear && $iday > $today)) {
          echo "<td width=\"24\" align=\"center\" class=\"today\"><a href=calendar_car.php?d=$iday&m=$month&y=$year&id=$id>$iday<a></td>\n";
        }
        else {
          echo "<td width=\"24\" align=\"center\" class=\"norm\"><a href=calendar_car.php?d=$iday&m=$month&y=$year&id=$id>$iday<a></td>\n";
        }
        $iday++;
      }
      else {
        echo "<td width=\"24\" align=\"center\" class=\"norm\">&nbsp;</td>\n";
      }
    }
    echo "</tr>\n";
  }
  else {
    break;
  }
}
?>
        <tr class="norm">
          <td height="20" colspan="7" align="center"><a href="<?php echo $PHP_SELF; ?>&id=<?=$id?>"></a></td>
        </tr>
      </table>
    </div></td>
    <tr height="2px"><td></td></tr>
  </tr>
  <tr>
    <td><div align="center">
      <table width="1000px" border="0" align="center" cellpadding="1" cellspacing="1" class="square">
        <?
		///////////////////////////////////////////////////////////////////////////////////////////////////////////////
			if ($thai2=='--')
			{
                $sqld="select distinct(farm_id_car) from reserver_car where date_go_reserver='$thaiz' and name_approve='͹��ѵ�' order by id_reserver desc";
            }
           else
           {
               $sqld="select distinct(farm_id_car) from reserver_car where date_go_reserver='$thai2' and name_approve='͹��ѵ�' order by id_reserver desc";
           } 
             $queryd=mysql_query($sqld) or die ("�Դ��������");
             $numd=mysql_num_rows($queryd);
			 
			 
		  $sql="select * from car";
          $query=mysql_query($sql) or die ("�Դ��������");
          $num_=mysql_num_rows($query);
///////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>	
		<tr>
          <td colspan="4" bgcolor="#BBDDFF"><span class="style30">��¡��ö�ͺ�ԡ�� <span class="style33">�ѹ���
            <? if ($thai2=='--')
	  { echo displaydate($thaiz);
	  }else { echo displaydate($thai2); }?>&nbsp;&nbsp;&nbsp;&nbsp;</span></span></td>
		          <td colspan="2" bgcolor="#BBDDFF"><div align="center">
              <span class="style22"><span class="style34">
<? if ($day1==''){ ?><a href="add_reserver.php?d=<?=$dayz?>&m=<?=$monthz?>&y=<?=$yearz?>&id=<?=$id?>"> <? } else {?>
<a href="add_reserver.php?d=<?=$day1?>&m=<?=$month1?>&y=<?=$year1?>&id=<?=$id?>"><? } ?><img src="images/addcar.gif" width="142" height="30" border="0" /></a></td>
        </tr>
        <tr>
          <td width="99" bgcolor="#FFEBD7"><div align="center"><strong>�ѹ����Թ�ҧ</strong></div></td>
          <td width="113" bgcolor="#FFEBD7"><div align="center"><strong>�����Թ�ҧ</strong></div></td>
          <td width="218" bgcolor="#FFEBD7"><div align="center"><strong>��¡��</strong></div></td>
          <td width="107" bgcolor="#FFEBD7"><div align="center"><strong>���ͧ</strong></div></td>
          <td width="92" bgcolor="#FFEBD7"><div align="center"><strong>�����Ţö</strong></div></td>
          <td width="150" bgcolor="#FFEBD7"><div align="center"><strong>ʶҳ�</strong></div></td>
        </tr>
        <?
if ($thai2=='--'){
$sql="select * from reserver_car where date_go_reserver='$thaiz' order by id_reserver desc";
}else{
$sql="select * from reserver_car where date_go_reserver='$thai2' order by id_reserver desc";
} 
$query=mysql_query($sql) or die ("�Դ��������");
$num=mysql_num_rows($query);
if ($num==0){
?>
        <tr>
          <td colspan="6"><div align="center" class="style22"> �ѧ�������¡�èͧö</div></td>
        </tr>
        <?
}
$ig=0;
for ($i=1;$i<=$num;$i++){	
$row=mysql_fetch_array($query); 
      $time_go=substr($row[time_go_reserver],0,5);
	   $time_back=substr($row[time_back_reserver],0,5);
?>
        <tr>
          <td height="20" bgcolor="#FFF9F2"><span class="style36"><? echo displaydate($row['date_go_reserver']);?></span></td>
          <td bgcolor="#FFF9F2"><span class="style36"><? echo "$time_go �֧���� $time_back";?></span></td>
          <td bgcolor="#FFF9F2"><span class="style21">
            <?=$row['detail_reserver']?>
          </span></td>
          <td bgcolor="#FFF9F2"><span class="style37">
            <?=$row['id_name']?></span></td>
          <td bgcolor="#FFF9F2"><div align="center"><span class="style21">
              <? echo "<a href=show_car2.php?farm_id_car=$row[farm_id_car] target=\"_blank\">$row[farm_id_car]</a>"; ?>
          </span></div></td>
          <td bgcolor="#FFF9F2"><div align="center">
              <? if ($row['name_approve']=="͹��ѵ�"){echo "<img src=images/gogo.gif width=75 height=30>"; $ig=$ig+1; }
	  		elseif($row['name_approve']=="��ú�ԡ���������"){echo "<img src=images/ends.gif width=75 height=30>";}
			else{ echo  "<img src=images/end.gif width=75 height=30>";}?>
          </div></td>
        </tr>
        <? 
		 } 
		?>
		
		  
		</table>
    </div></td>
  </tr>
  <tr height="5px">
    <td>
    </td>
  </tr>
  <tr>
    <td align="center"><? include ("backdown.php");?></td>
  </tr>    
</table>  </td>
</table>
</body>
</html>