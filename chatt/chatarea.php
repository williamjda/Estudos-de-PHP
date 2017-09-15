<?
session_start();
include("conn.php");
include("infosys.php");
include("dc/$lang.php");
$user = $_SESSION['user'];
$qr=mysql_query("SELECT * FROM atendentes where user='$user'");
while($rq=mysql_fetch_object($qr)){
	if($rq->sueresta !=0){
		mysql_query("DELETE FROM nafila WHERE id='$rq->sueresta'");
	}
}
mysql_query("UPDATE atendentes SET statu='1',sueresta='0',atendendo='0' WHERE user='$user'");
?><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<script src='js/jquery.js' type='text/javascript'></script>
<script>
	setInterval(function(){
		var user='<? echo $_SESSION['user']; ?>';
		var statuf=$("#statu").val();
		$.post("fctatend.php",{user:user,tp:'2'},function(rt){
			$("#chatslog").html(rt);
		});
	},10000);
</script>
<div id='chatslog'>
<div style='float:left;width:450px'>
<div style='float:left;width:100%'><div style='color:green;font-size:13px;width:100%'><? echo $dc_12; ?></div><div style='width:100%;font-size:13px;color;#666'><? echo $dc_13; ?></div></div>
</div></div>