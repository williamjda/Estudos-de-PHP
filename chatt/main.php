<?session_start();
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
		<style>
			body{margin:0px;background:skyblue;}
		</style>
	</head>
	<body>
	<div style='float:left;width:700px;background:skyblue;font-family:arial;height:450px'>
<?
include("conn.php");
	if(isset($_GET['sk'])){
		$sk=$_GET['sk'];
		if($sk =="home"){
			include("home.php");
		}elseif($sk =="enter"){
			include("enter.php");
		}elseif($sk =="chat"){
			include("chat.php");
		}elseif($sk =="login"){
			include("login.php");
		}elseif($sk =="loging"){
			include("loging.php");
		}elseif($sk =="panel"){
			include("panel.php");
		}
	}else{
		include("home.php");
	}
?>
</div>
</body>
</html>