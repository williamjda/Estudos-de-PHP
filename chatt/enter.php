<?
	$nome=$_GET['nome'];
	$email=$_GET['email'];
	$tempo=time();
	$duvida=$_GET['duvida'];
	$idu=uniqid("a");
	mysql_query("INSERT INTO nafila(id,nome,email,duvida,tempo,idu,sendoatendido,poruser) VALUES('','$nome','$email','$duvida','$tempo','$idu','0','')");
	
?>
<script>
	setInterval(function(){
		$.post("verifique1.php",{idu:'<? echo $idu; ?>'},function(rt){
				
		});
	},5000);
</script>
<div style='float:left;width:700px;'>
<div style='float:left;width:100%;background:skyblue;min-height:50px;'>
		<img src='img/logo.png' height='70px' style='float:left;margin:5px'>
	</div>
	<div style='float:left;width:100%;background:skyblue;height:20px;font-weight:bold;color:white;'>
	<div style='float:left;margin:0px 0px 0px 10px'><? echo $siteName; ?></div>
	</div>
	<iframe style='float:left;' src='chating1.php?idu=<? echo $idu; ?>' width='700px' height='330px' marginheight='0' marginwidth='0' frameborder='0'  scrolling='no'></iframe>
</div>