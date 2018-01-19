<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?
include("connect.php");
 		    $sql="select * from member where id='$u' and Password='$p'";
			$result=mysql_query($sql) or die ("ติดต่อฐานไม่ได้");
			$num=mysql_num_rows($result);
		

if($num>0)  // ok
{
 		    $sql="select status from member where id='$u' and Password='$p'";
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
	<script language="javascript">
	window.open('show_reserver.php?id=<? echo $u; ?>' , '_self');        
	</script>
	<?
	
}
else   //    User
{
	?>
	<script language="javascript">
	window.open('index.php?id=<? echo $u; ?>' , '_self');    
	</script>
	<?
}

}///////////////////////////////////////////////////////////////////////////////////////








	else
{
	?>
	<script language="javascript">
	alert('Username/Password ไม่ถูกต้อง');
	history.back();
	//window.open('login-index.php');    
	</script>
	<?
		
}

?>
</body>
</html>