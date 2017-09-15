<? session_start();
	include("infosys.php");
	include("dc/$lang.php");
	$s='$';
	$ok=0;
	$ock=0;
	include("conn.php");
		$user=$_POST['user'];
		$qr1=mysql_query("SELECT * FROM atendentes WHERE user='$user'");
		while($rq1=mysql_fetch_object($qr1)){
			$statu = $rq1->statu;
		}
		$time=time();
		mysql_query("UPDATE atendentes SET statu='$statu', hora='$time' WHERE user='$user' ");
	if($_POST['tp'] == 2){
		if($statu != 2 && $statu !=0){
			$qr=mysql_query("SELECT * FROM nafila");
			while($rq=mysql_fetch_object($qr)){
				$time=time() - $rq->tempo;
				if($time > 30){
					mysql_query("DELETE FROM nafila WHERE id='$rq->id'");
				}
				if($ock == 0){
				if($rq->sendoatendido == 0 && $time < 30 && $statu != 2 && $statu !=0){
					$idu=$rq->id;
					$ock++;
					mysql_query("UPDATE atendentes SET sueresta='$rq->id', atendendo='1' ,statu='2' WHERE  user='$user'");
					mysql_query("UPDATE nafila SET sendoatendido='1', poruser='$user'");
					echo"
						<script>location.href='chating.php?idcli=$rq->id'</script>
						<div id='chathere' style='float:left;width:100%'></div>
					";
					$chat1="<div style=\'float:left;width:100%\'><div style=\'color:green;font-size:13px;width:100%\'>$user</div><div style=\'width:100%;font-size:13px;color;#666\'>$dc_21 $user $dc_22</div></div>";
					mysql_query("INSERT INTO chats(id,iduser,idcli,conversa) VALUES('','$user','$rq->id','$chat1')");
					$ok=1;
					break;
				}
				}
			}
		}
	}
	if($ok==0){
		echo"
	<div style='float:left;width:100%'><div style='width:100%;font-size:13px;color;#666'>$dc_23</div></div>
		";
		
	}
?>