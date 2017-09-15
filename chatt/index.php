<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head> 
		<title>
		Sistema de  Atendimento e Comunicação Grátis  Para Sites | filmmes.com
		</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<script src='js/jquery.js' type='text/javascript'></script>
		<style>
			a img{border:none}
			a{text-decoration:none;color:darkblue}
			body {margin:0;padding:0;background:white;text-align:center;font-family:arial;font-size:16px}
			#geral{width:1000px;margin:0 auto;text-align:left;}
			#top{float:lewft;width:100%;height:150px;background:#00BFFF;}
			#lk{float:left;width:100%;background:#00BFFF;height:50px;border-radius:0px 0px 5px 5px}
			#lk a{float:left;margin:15px 10px 0px 10px;color:white;font-weight:bold;font-size:20px}
		</style>
		<script>
			function stall(){
				var idioma=$("#idioma").val();
				var admin=$("#admin").val();
				var host=$("#host").val();
				var user=$("#user").val();
				var senha=$("#senha").val();
				var banco=$("#banco").val();
				var nome=$("#nome").val();
				$.post("creating.php",{idioma:idioma,admin:admin,host:host,user:user,senha:senha,banco:banco,nome:nome},function(){
				
				});
			}
			function opw(){
				window.open('login.php','chat','width=700,height=500,fullscreen=no,location=no,menubar=no,resizable=no,scrollbars=no,toolbar=no,top=20,left=20')
			}
			function validete(){
				$.post("avalid.php",function(rt){
					location.href='index.php';
				});
			}
		</script>
	</head>
	<body>
		<div id='top'>
			<div id='geral'>
				<img src='img/logo.png'  style='float:left;height:100px;margin:25px 0px 0px 0px'>
				<img src='img/top.png' style='float:right;height:100px;margin:20px 30px 0px 0px'>
			</div>
		</div>
		<div id='geral'>
			<div style='float:left;width:100%;margin:30px 0px;font-size:20px;color:deeppink;font-weight:bold;'>
				Instalador filmmes em apenas  alguns passos.
			</div>
			<div style='width:500px;float:left;margin:0px 0px 50px 0px'>
			Selecione o idioma<br>
			<select id='idioma' style='width:400px;font-size:18px;border:1px solid #ccc'>
				<option value='pt_br'>Portugês Brasil</option>
				<option value='en_us'>American English</option>
			</select><br><br>
			Crie uma senha para o usuário <b>'admin'<b><br>
			<input type='text' id='admin' style='width:400px;font-size:18px;border:1px solid #ccc' />
			<br><br>
			Local a onde se incontra seu mysql<br>
			<input type='text' id='host' style='width:400px;font-size:18px;border:1px solid #ccc' value='localhost'/><br>
			Usuário mysql<br>
			<input type='text' id='user'style='width:400px;font-size:18px;border:1px solid #ccc'/><br>
			Senha mysql<br>
			<input type='text' id='senha' style='width:400px;font-size:18px;border:1px solid #ccc' /><br>
			banco de dados mysql<br>
			<input type='text' id='banco' style='width:400px;font-size:18px;border:1px solid #ccc' /><br><br>
			Nome do  seus site<br>
			<input type='text' id='nome' style='width:400px;font-size:18px;border:1px solid #ccc'/>
			<br><br>
			<button style='background:skyblue;border:0px;padding:5px;color:white;font-weight;bold;' onclick='stall()'>
				Instalar
			</button>
			<button  onclick='opw()' style='background:limegreen;border:0px;padding:5px;color:white;font-weight;bold;' title='verifica se a instalação  foi bem sucedida'>
				Verificar se está funcionando
			</button>
			<button onclick='validete()' style='background:red;border:0px;padding:5px;color:white;font-weight;bold;'>
				Concluir
			</button>
			</div>
			<div style='float:left;width:400px'>
				<font color='red'>Atenção</font> verifique se todos os seus dados mysql estão corretos pois se você digitar algum dado que possa está incorreto não será possivel as tabelas e seu chat não funcionará. certifique-se também digitar o host do seu msyql corretamente se está em duvida de onde e qual é o endereços do seu host entre em contato com seu provedor ou pesquise no google como descobrir meu host mysql. Em ipotese alguma abra o arquivo avalid.php sem antes ter concluído a instalação do seu chat pois isso irá deletar o arquivo de instalação somente a pós a conclusão da instalação para sua seguração abra o arquivo avalid.php pois assim você protege seu chat de tentavas de hackeamento.
		</div>