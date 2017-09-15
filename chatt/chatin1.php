<?
session_start();
include("conn.php");
include("infosys.php");
include("dc/$lang.php");
$idcli=$_GET['idcli'];
$idu=$_GET['idu'];
$user=$_GET['user'];
$qrs=mysql_query("SELECT * FROM nafila WHERE id='$idu' ");
while($rrd=mysql_fetch_object($qrs)){
	$nnome=str_replace("'","",$rrd->nome);
	$nemail=str_replace("'","",$rrd->email);
	$nduvida=str_replace("'","",$rrd->duvida);
}
$chat="<div style=\'float:left;width:100%\'><div style=\'color:red;font-size:13px;width:100%\'>$nnome</div><div style=\'width:100%;font-size:13px;color;#666\'>$dc_14<b>$nnome</b> $dc_15<b>$nemail</b> $dc_16 <b>$nduvida</b></div>";
mysql_query("INSERT INTO chats(id,iduser,idcli,conversa) VALUES('','$user','$idu','$chat')");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head> 
		<title>
		<? echo $dc_19; ?>
		</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script src='js/jquery.js' type='text/javascript'></script>
<script>
$(document).ready(function(){
	var user='<? echo $user; ?>';
	var idcli='<? echo $idu; ?>';
	$.post('getscv.php',{user:user,idcli:idcli},function(rt){
		$("#inner").html(rt);
	});
});
setInterval(function(){
	var user='<? echo $user; ?>';
	var idcli='<? echo $idu; ?>';
	var val1=$("#cont1").val();
	var vall1=parseInt(val1);
	$.post('contcvandverify.php',{tp:'1',user:user,idcli:idcli},function(rt){
		var val2=parseInt(rt);
		if(val2 > vall1){
			$.post("contcvandverifys.php",{tp:'2',vall1:vall1,user:user,idcli:idcli,eu:'cli'},function(tr){
				$("#inner").append(tr);
				$("#cont1").val(val2);
			});
		}
	});
	$('#inner').animate({ scrollTop: 60000 }, 'slow'); 
},1500);
function sendmdg(){
	var user='<? echo $user; ?>';
	var idcli='<? echo $idu; ?>';
	var val=$("#ttexarea").val();
	$.post("senmsg.php",{user:user,idcli:idcli,val:val,tp:'2'},function(){
			$("#ttexarea").val('');
	});
}
</script>
<div style='display:none'>
<audio  autoplay='autoplay' controls="controls">
  <source src="sound/message.ogg" type="audio/ogg" />
  <source src="sound/message.mp3" type="audio/mp3" />
</audio>
</div>
<input type='hidden' id='user' value='<? echo $user; ?>'>
<input type='hidden' id='idcli' value='<? echo $id; ?>'>
<input type='hidden' id='cont1' value='2'>
<div style='float:left;width:700px;background:white;overflow:scroll;height:250px;' id='inner'>
<? echo $dc_17; ?>
</div>
<div style='float:left;width:700px;height:20px;margin:-18px 0px 0px 0px;background:white;'></div>
<div style='float:left;width:700px;height:70px;margin:3px 0px 0px 0px'>
	<textarea style='float:left;width:600px;height:60px;resize:none;border:1px solid #E0FFFF;border-radius:3px' id='ttexarea'></textarea>
	<button style='float:left;width:90px;height:65px;border:0px;font-weight:bold;background:skyblue;font-size:20px;color:white;' onclick='sendmdg()'><? echo $dc_18; ?></button>
</div>
