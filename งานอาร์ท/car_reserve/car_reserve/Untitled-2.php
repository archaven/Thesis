mysql_query("SET NAMES 'tis620'"); 



<?

for ($i=1;$i<=$num;$i++){	
if ($row['name_approve']=="อนุมัติ"){$bg="#EBEBEB";}elseif($row['name_approve']=="การบริการเสร็จสิ้น"){$bg="#FFD7D7";}else{$bg="#B7FFB7";}
$row=mysql_fetch_array($query); 
      $time_go=substr($row[time_go_reserver],0,5);
	   $time_back=substr($row[time_back_reserver],0,5);
?>
        <tr>
          <td height="20" rowspan="2" bgcolor="#FDC8D8"><div align="center"><span class="style36"><span class="style38"><? echo $row['id_reserver'];?></span></span></div></td>
          <td height="9" bgcolor="#CCFFCC"><div align="center" class="style43">
              <? 
			$date_reser=substr($row['date_reserver'],0,10);
			//echo "$date_reser";
			echo displaydate($date_reser);
			 ?>
          </div></td>
          <td bgcolor="#97FF97"><div align="center" class="style43"><? echo displaydate($row['date_go_reserver']);?></div></td>
          <td rowspan="2" bgcolor="<?=$bg?>"><span class="style21"><a href="report_reserver.php?id_reserver=<?=$row['id_reserver']?>">
            <?=$row['detail_reserver']?>
          </a></span></td>
          <td rowspan="2" bgcolor="#BBFFD1"><div align="center"><span class="style21">
              <? if ($row['farm_id_car']==0){echo "--";}else{echo $row[farm_id_car]; }?>
          </span></div></td>
          <td rowspan="2" bgcolor="<?=$bg?>"><div align="center"><span class="style21">
              <?
$sqlQ="select * from driver_car where id_driver='$row[id_driver]'";
$queryQ=mysql_query($sqlQ) or die ("ติดต่อไม่ได้");
$rowQ=mysql_fetch_array($queryQ);
if ($row['id_driver']==0){echo "--";}else{echo $rowQ[name_driver]; } ?>
          </span></div></td>
          <td rowspan="2" bgcolor="<?=$bg?>"><div align="center"><span class="style21">
              <?=$row['id_name']?>
          </span></div></td>
		            <td rowspan="2" bgcolor="<?=$bg?>"><div align="center">
              <? if ($row['name_approve']=="อนุมัติ"){echo "<img src=images/gogo.gif width=75 height=30>";}
	  		elseif($row['name_approve']=="การบริการเสร็จสิ้น"){echo "<img src=images/ends.gif width=75 height=30>";}
			else{ echo  "<img src=images/end.gif width=75 height=30>";}?>
          </div></td>
          <td rowspan="2" bgcolor="<?=$bg?>"><div align="center">
            <?  if ($row['name_approve']!="การบริการเสร็จสิ้น") { ?>
          <a href="edit_reserver.php?id_reserver=<?=$row['id_reserver']?>&amp;id=<?=$id?>">
           <img src="image/edit.gif" width="20" height="20" border="0" />
         
          </a>
          
           <?
		  }
		  ?>
