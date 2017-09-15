<script>
	setInterval(function(){
		var user='<? echo $_SESSION['user']; ?>';
		$.post("fctatend1.php",{user:user,tp:'1'});
	},5000);
	
</script>
<div style='float:left;width:700px'>
	<div style='float:left;width:700px;background:skyblue;'>
		<img src='img/logo.png' height='70px' style='float:left;margin:0px'>
	</div>
	<div style='float:left;width:680px;background:skyblue;height:20px;font-weight:bold;'>
	<div style='float:left;margin:0px 0px 0px 10px;color:white;'><? echo $siteName; ?></div>
	<div style='float:right'>
		<a href='logout.php'><img src='img/logout.png' width='15px' height='15px' style='margin:2px 10px 0px 0px;float:left;'>
			<div style='float:left;margin:0px 10px 0px 0px;'><? echo $dc_2; ?></div></a>
	</div>
	</div>
	
	<iframe style='float:left;' src='chatarea.php' width='700px' height='350px' marginheight='0' marginwidth='0' frameborder='0' scrolling='no'></iframe>
	
</div>
<div id='echoscript'></div>