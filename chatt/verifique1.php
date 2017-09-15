<?
$idu=$_POST['idu'];
include("conn.php");
include("infosys.php");
include("dc/$lang.php");
$ttime=time();
mysql_query("UPDATE nafila SET tempo='$ttime' WHERE idu='$idu'");
$qrk=mysql_query("SELECT * FROM nafila WHERE idu='$idu'");
$iambe=0;
while($rqk=mysql_fetch_object($qrk)){
	$okssk=0;
	$qrk1=mysql_query("SELECT * FROM atendentes WHERE user='$rqk->poruser'");
	while($rqk1=mysql_fetch_object($qrk1)){
		if($rqk1->sueresta == $rqk->id){
			$okssk=1;
		}else{
			mysql_query("UPDATE nafila set sendoatendido='0', poruser='' WHERE idu='$idu'");
		}
	}
	if($rqk->sendoatendido == 1 && $okssk== 1){
	$iambe=1;	
	}
	$poruser=str_replace(" ","%20",$rqk->poruser);
	$idcc=$rqk->id;
}
if($iambe == 1){
echo "<script>location.href='chatin1.php?idcli=$idu&user=$poruser&idu=$idcc'</script>";
}else{
$ok=0;
$qr=mysql_query("SELECT * FROM atendentes ORDER BY RAND()");
while($rq=mysql_fetch_object($qr)){
	$time=time() - $rq->hora;
	if($time < 30 && $rq->statu =="1"){
		$ok=2;
	}elseif($time < 30 && $rq->statu =="2"){
		$ok=2;
	}elseif($time > 30 && $rq->statu =="1" || $rq->statu =="2" ){
		mysql_query("UPDATE atendentes SET statu='0' WHERE id='$rq->id'");
	}
}
if($ok == 1){
	
}elseif($ok == 2){
$cont=1;
$qr1=mysql_query("SELECT * FROM nafila ORDER BY id");
	while($rq1=mysql_fetch_object($qr1)){
		if($rq1->idu != $idu && $rq1->sendoatendido ==0){
		$cont++;	
		}elseif($rq1->idu == $idu){
			break;
		}
	}
	if($cont >= 1 ){
	echo"<div style='float:left;width:700px' id='inner'><div style='width:100%;font-size:13px;color;#666;text-align:center;'>$dc_33 $cont $dc_34</div></div>";
	}else{
	echo"<div style='float:left;width:700px' id='inner'><div style='width:100%;font-size:13px;color;#666;text-align:center;'> $dc_35</div>";
	}
}else{
	echo"<div style='float:left;width:700px' id='inner'><div style='width:100%;font-size:13px;color;#666;text-align:center;'>$dc_36</div>";
}
}
?>
