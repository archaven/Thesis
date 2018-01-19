<?
include "connect.php";
?>
<meta http-equiv="content-type" content="text/html; charset=windows-874" />
<link href="cssmenu/styles.css" rel="stylesheet" type="text/css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>

</head>
<body >

  <table id="Table_01" cellspacing="0" cellpadding="0" width="1000" height="" border="0"  bgcolor="#FFFFFF">
        <tbody>
            <tr>
                <td>
                    
                                   
                 
                  
                </td>
            </tr>
            
        </tbody>
         <tbody>
            <tr>
                <td>
                  <div id='cssmenu'>
<ul>

   <li><a href='index.php?id=<?=$_GET['id']?>'><span>หน้าหลัก</span></a></li>  
   <li><a href='calendar_car.php?id=<?=$_GET['id']?>'><span>จองรถ</span></a></li>
   <li><a href='detail_car.php?id=<?=$_GET['id']?>'><span>ข้อมูลรถ</span></a></li>
   <li><a href='detail_driver.php?id=<?=$_GET['id']?>'><span>ข้อมูลพนักงานขับรถ</span></a></li>
   <li><a href='about.php?id=<?=$_GET['id']?>'><span>เกี่ยวกับโปรแกรม</span></a></li>
   
   
   <?
  		    $sql="select status from member where id='$id'";
			$result=mysql_query($sql) or die ("ติดต่อฐานไม่ได้");
			$num=mysql_num_rows($result);
	for($i=1;$i<=$num;$i++)
   {
           $row = mysql_fetch_array($result);
   }
   
$ch=$row['status'];
if($ch=='Admin')    //    Admin
{
	?>  
   <li class='last'><a href='show_reserver.php?id=<?=$_GET['id']?>'><span>ผู้ดูแล</span></a></li>
<?
}
?>
   <li class="last"><a href='login-index.php'><span>ออกจากระบบ</span></a></li>
</ul>
</div>
                  
                </td>
            </tr>
            
                    </tbody>
                    <tbody>
            <tr>
</table>

