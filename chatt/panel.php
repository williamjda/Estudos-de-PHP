<?
	if($_SESSION['ok'] == 'ok'){
	$user=$_SESSION['user'];
	if($user=='admin'){
		include("adminpainel.php");
	}else{
		include("atendepanel.php");
	}
	}else{
		echo  "erro";
	}
?>