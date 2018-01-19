<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<?
$id_reserver=$_GET['id_reserver'];
$id=$_GET['id'];
?>
<script language="javascript">
if(confirm('คุณต้องการยกเลิกรายการ')==true)
{
window.open('delete2.php?id=<? echo $id; ?>&id_reserver=<? echo $id_reserver; ?>');
}
else
{
window.open('show_reserver.php?id=<? echo $id; ?>');
}
</script>