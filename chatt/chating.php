<?
session_start();
$user=$_SESSION['user'];
$id=$_GET['idcli'];
include("infosys.php");
include("dc/$lang.php");
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
	var idcli='<? echo $id; ?>';
	$.post('getscv.php',{user:user,idcli:idcli},function(rt){
		$("#cvs").prepend(rt);
	});
});
setInterval(function(){
	var user='<? echo $user; ?>';
	var idcli='<? echo $id; ?>';
	var val1=$("#cont1").val();
	var vall1=parseInt(val1);
	$.post('contcvandverify.php',{tp:'1',user:user,idcli:idcli},function(rt){
		var val2=parseInt(rt);
		if(val2 > vall1){
			$.post("contcvandverifys.php",{tp:'2',vall1:vall1,user:user,idcli:idcli,eu:'user'},function(tr){
				$("#cvs").append(tr);
				$("#cont1").val(val2);
			});
		}
	});
	$('#cvs').animate({ scrollTop: 60000 }, 'slow'); 
},1500);
function sendmdg(){
	var user='<? echo $user; ?>';
	var idcli='<? echo $id; ?>';
	var val=$("#ttexarea").val();
	$.post("senmsg.php",{user:user,idcli:idcli,val:val,tp:'1'},function(){
			$("#ttexarea").val('');
	});
}
function gotyo(){
	var user='<? echo $user; ?>';
	var idcli='<? echo $id; ?>';
	var val="<? echo $dc_39; ?>";
	$.post("senmsg.php",{user:user,idcli:idcli,val:val,tp:'1'},function(){
		location.href='chatarea.php';
	});
}
</script>
<script type="text/javascript">  
 
</script>  
<div style='display:none'>
<audio  autoplay='autoplay' controls="controls">
  <source src="sound/message.ogg" type="audio/ogg" />
  <source src="sound/message.mp3" type="audio/mp3" />
</audio>
</div>
<div style='display:none'></div>
<input type='hidden' id='user' value='<? echo $user; ?>'>
<input type='hidden' id='idcli' value='<? echo $id; ?>'>
<input type='hidden' id='cont1' value='1'>
<div style='position:fiexed;z-index:100;margin:0px 0px 0px 550px;font-size:12;color:deeppink;font-weight:bold;' onclick="gotyo()"><img src='img/close.png' onclick="gotyo()" width='15px' height='15px' title='<? echo $dc_37; ?>'></img><a href='javascript:void(0)' onclick="gotyo()"><? echo $dc_37; ?></a></div>
<div style='float:left;width:700px;background:white;overflow:scroll;height:250px' id='cvs'>
</div>
<div style='float:left;width:700px;height:20px;margin:-18px 0px 0px 0px;background:white;'></div>
<div style='float:left;width:700px;height:70px;margin:3px 0px 0px 0px'>
	<textarea style='float:left;width:580px;height:60px;resize:none;border-radius:3px;border:1px solid #E0FFFF' id='ttexarea'></textarea>
	<button style='float:left;width:90px;height:65px;border:0px;font-weight:bold;background:skyblue;font-size:20px;color:white;' onclick='sendmdg()'><? echo $dc_18; ?></button>
</div>
