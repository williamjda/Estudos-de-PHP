<?
	include("infosys.php");
	include("dc/$lang.php");
	include ("conn.php");
	if(isset($_POST['check']) && $_POST['tp'] ==1){
		$qr=mysql_query("SELECT * FROM atendentes");
		while($rq=mysql_fetch_object($qr)){
			if($rq->user == 'admin'){
			echo"
			<div style='float:left;width:100%;font-size:14px;margin:5px 0px'>
				<div style='float:left;color:red'>$rq->user</div><div style='margin:0px 0px 5px 10px;float:left;color:#666'>$dc_9</div>
			</div>
			";
			}else{
			echo"
			<div style='float:left;width:100%;font-size:14px;margin:5px 0px'>
				<div style='float:left;color:red'>$rq->user</div><div style='margin:0px 0px 5px 10px;float:left;color:#666'>$dc_10<a href='javascript:void(0)' onclick='excluir($rq->id)'>$dc_11</a></div>
			</div>
			";
			}
		}
	}if(isset($_POST['check']) && $_POST['tp'] ==2){
		$senha=$_POST['senha'];
		$user=$_POST['user'];
		$email=strtolower($_POST['email']);
		$time=time();
		mysql_query("INSERT INTO atendentes(id,user,senha,statu,hora,atendendo,sueresta,email) VALUES('','$user','$senha','0','$time','0','0','$email')");
	}if(isset($_POST['check']) && $_POST['tp'] ==3){
		$id=$_POST['id'];
		mysql_query("DELETE FROM atendentes WHERE id='$id'");
	}
?>