<?
$idioma=$_POST['idioma'];
$admin=$_POST['admin'];
$host=$_POST['host'];
$user=$_POST['user'];
$senha=$_POST['senha'];
$banco=$_POST['banco'];
$nom=str_replace("'","",$_POST['nome']);
$nome=str_replace('"',"",$nom);
$fp=fopen("conn.php","w");
$yu1='user';
$yu2='id';
$yu3='cont';
$yu4='qr';
$yu5='rq';
$yu6='_POST[';
$yu7='$';
$yu8='idcli';
$lang='lang';
$siteName='siteName';
$wr="<? mysql_connect('$host','$user','$senha'); mysql_select_db('$banco');?>";
$fr=fwrite($fp,$wr);
fclose($fp);
$fp1=fopen("infosys.php","w");
$wr1="<? $$lang='$idioma'; $$siteName='$nome'?>";
$fr1=fwrite($fp1,$wr1);
fclose($fp1);
$fp2=fopen("contcvandverify.php","w");
$wr2="<?session_start();
mysql_connect('$host','$user','$senha');mysql_select_db('$banco');
$$yu1=$yu7$yu6'$yu1'];
$$yu2=$yu7$yu6'$yu8'];
$$yu3=0;
$$yu4=mysql_query(\"SELECT * FROM chats WHERE iduser='$$yu1' && idcli='$$yu2'\");
while($$yu5=mysql_fetch_object($$yu4)){
	$$yu3++;
}
echo $$yu3;
?>";
$fr2=fwrite($fp2,$wr2);
fclose($fp2);
mysql_connect("$host","$user","$senha");
mysql_select_db("$banco");
mysql_query("CREATE DATABASE IF NOT EXISTS $banco");
mysql_query("CREATE TABLE IF NOT EXISTS chats(id int(255) NOT NULL AUTO_INCREMENT,iduser varchar(255) NOT NULL,idcli varchar(255) NOT NULL,conversa longtext NOT NULL,PRIMARY KEY (id)) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;");
mysql_query("CREATE TABLE IF NOT EXISTS atendentes(id int(255) NOT NULL AUTO_INCREMENT,user varchar(255) NOT NULL,senha varchar(255) NOT NULL,statu int(255) NOT NULL,hora int(255) NOT NULL,atendendo int(255) NOT NULL,sueresta int(255) NOT NULL,email varchar(255) NOT NULL,PRIMARY KEY (id)) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;");
mysql_query("CREATE TABLE IF NOT EXISTS nafila(id int(255) NOT NULL AUTO_INCREMENT,nome varchar(255) NOT NULL,email varchar(255) NOT NULL,duvida varchar(255) NOT NULL,tempo int(255) NOT NULL,idu varchar(255) NOT NULL,sendoatendido int(255) NOT NULL,poruser varchar(255) NOT NULL,PRIMARY KEY (id)) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;");
mysql_query("INSERT INTO atendentes(id, user, senha, statu, hora, atendendo, sueresta, email) VALUES('', 'admin', '$admin', '0', '0', '0', '0', 'admin')");
?>