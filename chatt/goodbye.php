<? 
include("conn.php");
$id=$_GET['id'];
mysql_query("DELETE * FROM nafila WHERE id='$id'");
include("infosys.php");
include("dc/$lang.php");
echo"<div style='float:left;width:100%'><div style='width:100%;font-size:13px;color;#666'>$dc_38..</div></div>";
?>