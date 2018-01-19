<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<html>
<head><title>��ԷԹ����Թö</title>
<style type="text/css">
  .today  { font-family: ms sans serif; font-size: 10pt; 
            font-weight: bold; background-color: #000000; 
            color: #FFFFFF; border: 3 double #000000; }
  .sunday { font-family: ms sans serif; font-size: 10pt; 
            background-color: #FF0000; color: #FFFFFF; }
  .norm   { font-family: ms sans serif; font-size: 10pt; 
            background-color: #FFFFFF; color: #000000; }
.style1 {
	color: #FFFFFF;
	font-weight: bold;
}
</style></head>
<body bgcolor="#e9f2f0">
<?php
/* $diffHour ��� $diffMinute ��͵���÷�����纨ӹǹ���������Шӹǹ�ҷշ��
   ᵡ��ҧ�ѹ�����ҧ����ͧ���͹��Ѻ����ͧ��������� ����ӴѺ �蹶�����Ңͧ
   ����ͧ����繵����ǡ������Ңͧ����ͧ��������� 11 ������� 15 �ҷ� ������˹� 
   $diffHour �� 11 ��С�˹� $diffMinute �� 15 㹷��������¹������
   ����ͧ���������Ѻ����ͧ����繵������ҵç�ѹ */
$diffHour = 0;
$diffMinute = 0;

if ($dfMonth == "") {
  /* �������ա���к�����ʴ���ԷԹ�ͧ��͹���͹˹�� ��Ҩ��ʴ���ԷԹ�ͧ��͹
     �Ѩ�غѹ������������ͧ����繵� ����ѧ���� getdate() ���ҧ�ѹ���/����
     �Ѩ�غѹ�ͧ����ͧ����繵������㹵���� $calTime ��觿ѧ���蹹��Ф׹��ҡ�Ѻ��
     ���������� */
  $calTime = getdate(date(mktime(date("H") + $diffHour, 
    date("i") + $diffMinute)));
  $today = $calTime["mday"];     //�ѹ���
  $month = $calTime["mon"];      //��͹
  $year = $calTime["year"];      //��
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

<table width="468" border="1" align="center" bordercolor="black">
<tr class="norm">
  <td colspan="7" align="center" bgcolor="#0066FF"><span class="style1">�礵��ҧ��èͧö</span></td>
  <tr class="norm"><td width="65" align="center">
<a href="<?php echo $PHP_SELF; ?>
?today=<?php echo $today; ?>
&dfMonth=<?php echo ($month - 1) ?>
&dfYear=<? echo $year; ?>">&lt;</a>
</td>
<td align="center" colspan="5" bgcolor="#F9F4DD">
<?php echo $thmonthname[$month - 1]; ?>&nbsp;
<?php echo ($year + 543); ?></td>
<td width="63" align="center">
<a href="<?php echo $PHP_SELF; ?>
?today=<?php echo $today; ?>
&dfMonth=<?php echo ($month + 1); ?>
&dfYear=<?php echo $year; ?>">&gt;</a></td>
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
      echo "<td width=\"24\" align=\"center\" class=\"sunday\"><a href=show_reserver.php?d=$iday&m=$month&y=$year>$iday<a></td>\n";
    }
    elseif ($iday == $today) {  //�óշ�����ѹ�Ѩ�غѹ
      echo "<td width=\"24\" align=\"center\" class=\"today\"><a href=show_reserver.php?d=$iday&m=$month&y=$year>$iday<a></td>\n";
    }
    else {
      echo "<td width=\"24\" align=\"center\" class=\"norm\"><a href=show_reserver.php?d=$iday&m=$month&y=$year>$iday<a></td>\n";
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
          echo "<td width=\"24\" align=\"center\" class=\"sunday\"><a href=show_reserver.php?d=$iday&m=$month&y=$year>$iday<a></td>\n";
        }
        elseif ($i == 0 && ($iday == $today)) {
          echo "<td width=\"24\" align=\"center\" class=\"today\"><a href=show_reserver.php?d=$iday&m=$month&y=$year>$iday<a></td>\n";
        }
        elseif ($iday == $today) {
          echo "<td width=\"24\" align=\"center\" class=\"today\"><a href=show_reserver.php?d=$iday&m=$month&y=$year>$iday<a></td>\n";
        }
        else {
          echo "<td width=\"24\" align=\"center\" class=\"norm\"><a href=show_reserver.php?d=$iday&m=$month&y=$year>$iday<a></td>\n";
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
<td align="center" colspan="7">
<a href="<?php echo $PHP_SELF; ?>">�ѹ���Ѩ�غѹ</a></td>
</tr>
</table>
</body></html>
