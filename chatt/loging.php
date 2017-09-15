<?
	$user=$_POST['user'];
	$senha=$_POST['senha'];
	$ok=0;
	$qr=mysql_query("SELECT * FROM atendentes");
	while($rq=mysql_fetch_object($qr)){
		if($user ==$rq->email && $senha == $rq->senha){
		$ok=1;
		$_SESSION['user']="$rq->user";
		$_SESSION['ok']='ok';
		if($user != 'admin'){
		mysql_query("UPDATE atendentes SET statu='1',sueresta='0',atendendo='0' WHERE email='$user'");
		}
		echo"<script>location.href='main.php?sk=panel'</script>";
		}
	}
	if($ok==0){
		echo"<div style='float:left;width:100%;text-align:center;color:red;font-size:14px;color:red;font-weight:bold'>$dc_32</div>";
		include("login.php");
	}
?>