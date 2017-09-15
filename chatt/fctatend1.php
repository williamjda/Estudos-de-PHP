<? session_start();
	$s='$';
	$ok=0;
	include("conn.php");
		$user=$_POST['user'];
		$qr1=mysql_query("SELECT * FROM atendentes WHERE user='$user'");
		while($rq1=mysql_fetch_object($qr1)){
			$statu = $rq1->statu;
		}
		$time=time();
		mysql_query("UPDATE atendentes SET statu='$statu', hora='$time' WHERE user='$user' ");
?>