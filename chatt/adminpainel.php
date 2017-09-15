<body style='width:700px' onload='loadb()'>
<? include ("dc/$lang.php")?>
<script>
	function loadb(){
		$("#inner").load('aminfunctions.php',{check:'ok',tp:'1'});
	}
	function makeus(){
		$("#bttmk").hide();
		var user=$("#nuser").val();
		var senha=$("#nsenha").val();
		var email=$("#nemail").val();
		$.post("aminfunctions.php",{user:user,senha:senha,email:email,check:'ok',tp:'2'},function(){
			$("#inner").load('aminfunctions.php',{check:'ok',tp:'1'});
			$("#nuser").val('');
			$("#nsenha").val('');
			$("#nemail").val('');
			$("#bttmk").show();
		});
	}
	function excluir(id){
		$.post("aminfunctions.php",{id:id,check:'ok',tp:'3'},function(){
		$("#inner").load('aminfunctions.php',{check:'ok',tp:'1'});
		});
	}
</script>
<div style='float:left;width:700px'>
	<div style='float:left;width:700;background:skyblue;min-height:50px;'>
		<img src='img/logo.png' height='70px' style='float:left;margin:5px'>
	</div>
	<div style='float:left;width:700px;background:skyblue;height:20px;font-weight:bold;color:white;'>
	<div style='float:left;margin:0px 0px 0px 10px'><? echo $siteName; ?></div>
	<div style='float:right'>
		<a href='logout.php'><img src='img/logout.png' width='15px' height='15px' style='margin:2px 10px 0px 0px;float:left;'>
			<div style='float:left;margin:0px 10px 0px 0px;'><? echo $dc_2; ?></div></a>
	</div>
	</div>
	<div style='float:left;width:700px'>
		<div style='float:left;width:700px;font-weight:bold;font-size:16px;padding:10 5px 5px 5px;color:#666'>
			<? echo  $dc_3; ?>
		</div>
		<div style='float:left;width:700px'>
			<div style='float:left;width:100px;text-align:right;font-size:12px'>
			<? echo $dc_4; ?><br><br>
			<? echo $dc_5; ?><br><br>
			<? echo $dc_26; ?>
			</div>
			<div style='float:left;width:300px;margin:0px 0px 0px 10px'>
			<input type='text' id='nuser'><br>
			<input type='password' id='nsenha'><br>
			<input type='text' id='nemail'><br>
			<button id='bttmk' style='background:skyblue;border:0px;padding:5px;' onclick='makeus()'><? echo $dc_6; ?></div>
			</div>
		</div>
	</div>
	<div id='inner' style='float:left;width:700px;height:200px;overflow:scroll;background:white;'>
	<center><? echo $dc_7; ?></center>
	</div>
	<div style='float:left;width:700px;height:20px;background:white;margin:-20px 0px 0px 0px'>
		
	</div>
</div>