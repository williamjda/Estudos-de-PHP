<?
$fp=fopen("index.php","w");
$date=date("d/m/Y");
$wr="<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
	<head> 
		<title>
		Sistema de  Atendimento e Comunicação Grátis  Para Sites | filmmes.com
		</title>
		<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
		<script src='js/jquery.js' type='text/javascript'></script>
		<style>
			a img{border:none}
			a{text-decoration:none;color:darkblue}
			body {margin:0;padding:0;background:white;text-align:center;font-family:arial;font-size:16px}
			#geral{width:1000px;margin:0 auto;text-align:left;}
			#top{float:lewft;width:100%;height:150px;background:#00BFFF;}
			#lk{float:left;width:100%;background:#00BFFF;height:50px;border-radius:0px 0px 5px 5px}
			#lk a{float:left;margin:15px 10px 0px 10px;color:white;font-weight:bold;font-size:20px}
		</style>
	</head>
	<body>
		<div id='top'>
			<div id='geral'>
				<img src='img/logo.png'  style='float:left;height:100px;margin:25px 0px 0px 0px'>
				<img src='img/top.png' style='float:right;height:100px;margin:20px 30px 0px 0px'>
			</div>
		</div>
		<div id='geral'>
			<div style='float:left;width:100%;margin:30px 0px;font-size:20px;color:deeppink;font-weight:bold;'>
				Filmmes.com chat atendimento foi instalado neste site em $date
			</div>";
fwrite($fp,$wr);
fclose($fp);