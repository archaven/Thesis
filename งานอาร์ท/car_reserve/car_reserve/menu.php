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

   <li><a href='index.php?id=<?=$_GET['id']?>'><span>˹����ѡ</span></a></li>  
   <li><a href='calendar_car.php?id=<?=$_GET['id']?>'><span>�ͧö</span></a></li>
   <li><a href='detail_car.php?id=<?=$_GET['id']?>'><span>������ö</span></a></li>
   <li><a href='detail_driver.php?id=<?=$_GET['id']?>'><span>�����ž�ѡ�ҹ�Ѻö</span></a></li>
   <li><a href='about.php?id=<?=$_GET['id']?>'><span>����ǡѺ�����</span></a></li>
   
   
   <?
  		    $sql="select status from member where id='$id'";
			$result=mysql_query($sql) or die ("�Դ��Ͱҹ�����");
			$num=mysql_num_rows($result);
	for($i=1;$i<=$num;$i++)
   {
           $row = mysql_fetch_array($result);
   }
   
$ch=$row['status'];
if($ch=='Admin')    //    Admin
{
	?>  
   <li class='last'><a href='show_reserver.php?id=<?=$_GET['id']?>'><span>������</span></a></li>
<?
}
?>
   <li class="last"><a href='login-index.php'><span>�͡�ҡ�к�</span></a></li>
</ul>
</div>
                  
                </td>
            </tr>
            
                    </tbody>
                    <tbody>
            <tr>
</table>

