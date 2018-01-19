<? 
session_start(); 
include("connect.php");
$_SESSION['loginPassword'] = $_POST['txtPassword'];
$_SESSION['checkOffice'] = $_POST['check_office'];
echo $_SESSION['loginPassword'];
echo $_SESSION['checkOffice'];

//include("check.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<link rel="stylesheet" type="text/css" href="../lib/web.css">
<title>ผู้ดูแลระบบ</title>
<style type="text/css">
<!--
.style1 {
	font-size: 14px;
	font-weight: bold;
	color: #333333;
}
.style2 {color: #003300}
.style43 {color: #0066FF}
.style21 {color: #666666}
.style22 {color: #FF0000;
	font-weight: bold;
}
.style24 {color: #FFFFFF}
.style31 {color: #000033}
.style32 {color: #003399}
.style33 {color: #CC6600}
.style35 {	color: #CC3300;
	font-weight: bold;
	font-size: 18px;
}
.style36 {color: #006633}
.style37 {color: #FF6600}
.style38 {	font-weight: bold;
	color: #0066FF;
}
.style40 {color: #333333}
.style41 {color: #CCCCCC}
.style42 {	color: #003300;
	font-weight: bold;
}
-->
</style>
<style type="text/css">
.box {
 /*  width:1000px;
 /*   height:100px;*/
    /* ส่วนของ การแสดงเส้น  */
 /*   border-color:#6CF;*/
 /*   border-style:solid;*/
    /* จบส่วนของ การแสดงเส้น  */
    /* ส่วนของ gradient */
 /*   background: rgb(254,255,255); /* Old browsers */
 /*   background: -moz-linear-gradient(top,  rgba(254,255,255,1) 0%, rgba(210,235,249,1) 100%); /* FF3.6+ */
 /*   background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(254,255,255,1)), color-stop(100%,rgba(210,235,249,1))); /* Chrome,Safari4+ */
 /*   background: -webkit-linear-gradient(top,  rgba(254,255,255,1) 0%,rgba(210,235,249,1) 100%); /* Chrome10+,Safari5.1+ */
 /*   background: -o-linear-gradient(top,  rgba(254,255,255,1) 0%,rgba(210,235,249,1) 100%); /* Opera 11.10+ */
 /*   background: -ms-linear-gradient(top,  rgba(254,255,255,1) 0%,rgba(210,235,249,1) 100%); /* IE10+ */
 /*   background: linear-gradient(to bottom,  rgba(254,255,255,1) 0%,rgba(210,235,249,1) 100%); /* W3C */
 /*   filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#feffff', endColorstr='#d2ebf9',GradientType=0 ); /* IE6-9 */
    /* จบ ส่วนของ gradient */
    /* ส่วนการแสดง ผล radius*/
    -webkit-border-radius: 0px;
    border-radius: 0px; 
   /*สบ ส่วนการแสดง ผล radius*/
    /*ส่วนของ shadow */
    -webkit-box-shadow: 0px 0px 5px 5px rgba(200, 197, 200, 1);
    box-shadow: 0px 0px 5px 5px rgba(200, 197, 200, 1); 
     /* จบ ส่วนของ shadow */
}
.style56 {color: #FF0000}
.style60 {
	font-size: 18px;
	color: #FF0000;
}
</style>
</head>
<body  bgcolor="#DFFDFF">
<table align="center" width="1000px">
<td><div class="box" >
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
    <td><table width="100%" border="0">
      <tr>
        <td height="47" valign="top"><? include ("menu.php");?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><div align="center">
      <form id="form1" name="form1" method="post" action="admin.check.php" >
        <div align="left">
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <table width="381" border="0" align="center" cellpadding="5" cellspacing="0" class="square">
              <tr>
                <td colspan="3" bgcolor="#84B54A"><span class="style43">เข้าสู่ระบบผู้ดูแล</span></td>
              </tr>
              <tr>
                <td width="98"><div align="right"><span class="style2">สำนักงาน</span></div></td>
                <td width="113"><label>
                  <input name="check_office" type="radio" value="ho" />
                  </label>
                  สำนักงานใหญ่ </td>
                <td width="138"><label>
                  <input name="check_office" type="radio" value="farm" />
                  </label>
                  สำนักงานฟาร์ม</td>
              </tr>
              <tr>
                <td><div align="right"><span class="style2">รหัสผ่าน</span></div></td>
                <td colspan="2"><label>
                  <input name="txtPassword" type="password" id="txtPassword"  />
                </label></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td colspan="2"><label>
                  <input type="submit" name="Submit" value="เข้าสู่ระบบ" />
                  <input type="hidden" name="id" value="<?=$id?>" />
                </label></td>
              </tr>
            </table>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
        </div>
        </form>
      </blockquote>
        </blockquote>
        </blockquote>
        </blockquote></td>
  </tr>
  <tr>
    <td><div align="center"></div></td>
  </tr>
  <tr>
    <td><div align="center">
      <? include ("backdown.php");?>
    </div></td>
  </tr>
    </table>  </td>
</table>
</body>
</html>
