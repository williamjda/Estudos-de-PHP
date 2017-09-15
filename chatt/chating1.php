<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head> 
		<title>
		<? echo $dc_19; ?>
		</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script src='js/jquery.js' type='text/javascript'></script>
<?
session_start();
include("infosys.php");
include("dc/$lang.php");
$idu=$_GET['idu'];
?>
<script>
	setInterval(function(){
		$.post("verifique1.php",{idu:'<? echo $idu; ?>'},function(rt){
				$("#inner").html(rt);
		});
	},5000);
</script>
<body style='background:skyblue;margin:0px;'>
<div style='float:left'>
<div style='display:none'></div>
<input type='hidden' id='user' value='<? echo $user; ?>'>
<input type='hidden' id='idcli' value='<? echo $id; ?>'>
<input type='hidden' id='cont' value='2'>
<div style='float:left;width:700px' id='inner'><div style='width:100%;font-size:13px;color;#666;text-align:center;'><? echo $dc_20; ?></div></div>
</div>
</div>