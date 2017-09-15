<?
	session_start();
	$_SESSION['user']='0';
	$_SESSION['ok']='no';
	echo "<script>location.href='login.php'</script>"
?>