<?
include("infosys.php");
include("dc/$lang.php");
?>
<body  style='margin:0px;font-family:arial;width:700px;background:skyblue;'>
<div style='float:left;width:100%;background:skyblue;min-height:50px;'>
		<img src='img/logo.png' height='70px' style='float:left;margin:5px'>
	</div>
	<div style='float:left;width:100%;background:skyblue;height:20px;font-weight:bold;color:white;'>
	<div style='float:left;margin:0px 0px 0px 10px'><? echo $siteName; ?></div>
	</div>
	<div style='float:left;width:100%'>
		<div style='float:left;width:680px;font-weight:bold;font-size:16px;padding:10 5px 5px 5px;color:#E0FFFF'>
			<div style='float:left;margin:0px 0px 0px 30px;'>
			<? echo $dc_29; ?>
		</div>
		</div>
		<div style='float:left;width:430;font-size:12px;padding:5px;color:#E0FFFF;margin:0px 0px 0px 35px;'>
			<? echo $dc_30; ?>
		</div>
		<div style='float:left;width:100%;margin:20px 0px 0px 0px;'>
			<div style='float:left;width:150px;text-align:right;font-size:12px;color:white ;font-weight:bold;'>
				<? echo $dc_26; ?>:<br><br>
				<? echo $dc_5; ?>:<br><br>
			</div>
			<form action='main.php?sk=loging' method='post'>
			<div style='float:left;margin:0px 0px 0px 10px;width:390px;'>
				<input type='text' name='user' style='float:left;width:380px;border-radius:3px;border:1px solid #E0FFFF'>
				<input type='password' name='senha' style='float:left;width:380px;border-radius:3px;border:1px solid #E0FFFF'>
				<input type='submit' style='float:right;padding:5px;border:0px;background:white;margin:10px 10px 0px 0px;font-weight:bold;border-radius:3px;border:1px solid #E0FFFF' value='<? echo  $dc_31; ?>'>
			</div>
			</form>
		</div>
	</div>
</div>
<div style='float:left;width:680px;margin:100px 0px 20px 0px;text-align:right;'><a href='http://www.filmmes.com' style='text-decoration:none;color:#5F9EA0;font-weight:bold;font-size:12px;'>Desenvolvido por www.filmmes.com</a></div>