<div style='float:left;width:100%;background:skyblue;min-height:50px;'>
		<img src='img/logo.png' height='70px' style='float:left;margin:5px'>
	</div>
	<div style='float:left;width:100%;background:skyblue;height:20px;font-weight:bold;color:white;'>
	<div style='float:left;margin:0px 0px 0px 10px'><? echo $siteName; ?></div>
	</div>
	<div style='float:left;width:100%'>
		<div style='float:left;width:680px;font-weight:bold;font-size:16px;padding:10 5px 5px 5px;color:#E0FFFF'>
			<div style='float:left;margin:0px 0px 0px 30px;'><? echo  $dc_24; ?></div>
		</div>
		<div style='float:left;width:430;font-size:12px;padding:5px;color:#E0FFFF;margin:0px 0px 0px 35px;'>
			<? echo $dc_25; ?>
		</div>
		<div style='float:left;width:100%;margin:20px 0px 0px 0px;'>
			<div style='float:left;width:150px;text-align:right;font-size:12px;color:white ;font-weight:bold;'>
				<? echo $dc_4; ?>:<br><br>
				<? echo $dc_26;?>:<br><br>
				<? echo $dc_27;?>:<br>
			</div>
			<form action='main.php' method='get'>
			<div style='float:left;margin:0px 0px 0px 10px;width:390px;'>
				<input type='hidden' value='enter' name='sk'>
				<input type='text' name='nome' style='float:left;width:380px;border-radius:3px;border:1px solid #E0FFFF'>
				<input type='text' name='email' style='float:left;width:380px;border-radius:3px;border:1px solid #E0FFFF'>
				<textarea name='duvida' style='float:left;width:380px;height:100px;resize:none;border-radius:3px;border:1px solid #E0FFFF'></textarea>
				<input type='submit' style='float:right;padding:5px;background:white;margin:10px 10px 0px 0px;font-weight:bold;border-radius:3px;border:1px solid #E0FFFF' value='<? echo $dc_28; ?>'>
			</div>
			</form>
		</div>
	</div>
<div style='float:left;width:680px;margin:20px 0px 20px 0px;text-align:right;'><a href='http://www.filmmes.com' style='text-decoration:none;color:#5F9EA0;font-weight:bold;font-size:12px;'><? echo $dc_8; ?></a></div>