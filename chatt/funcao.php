<?
include("ads/conn.php");
session_start();
$geturl = explode('/', $_SERVER['REQUEST_URI']);
if($geturl[1] == "ads" && $geturl[2] =="home") {
	$title='Anuncie de gratis free ads melhor preзo do mercado propaganda super  barata';
	include("ads/head.php");
	include ("ads/index.php");
}elseif($geturl[1] == "ads" && $geturl[2] == "painel" && !isset($geturl[3])) {
	$title='Painel';
	include("ads/hea2.php");
	include ("ads/painel1.php");
}elseif($geturl[1] == "ads" &&$geturl[2] == "painel" && isset($geturl[3])) {
	if($geturl[3] == "criar"){
		$title='Criar Propaganda no filmmes.com';
		include("ads/hea2.php");
		include ("ads/criar1.php");
	}elseif($geturl[3] == "configuracao"){
		$title='Configuraзгo de conta no filmmes.com';
		include("ads/hea2.php");
		include ("ads/conf1.php");
	}elseif($geturl[3] == "pergarcodigo"){
		$title='Configuraзгo de conta no filmmes.com';
		include("ads/hea2.php");
		include ("ads/pegarcodigo1.php");
	}
}elseif($geturl[1] == "ads" && $geturl[2] == "CadastroPublicante") {
	$title='Cadastre-se e divlgue em seu site e ganhe dinheiro gere receita';
	include("ads/head.php");
	include ("ads/cadastro1.php");
}elseif($geturl[1] == "ads" && $geturl[2] == "CadastroAnunciante") {
	$title='Cadastre-se e divulgue em varios sites pelo menor preзo';
	include("ads/head.php");
	include ("ads/cadastro2.php");

}elseif($geturl[1] == "ads" && $geturl[2] == "cadastrandocp") {
	include ("ads/cadastrandocp1.php");

}elseif($geturl[1] == "ads" && $geturl[2] == "atendimento") {
	$title='Atendimento ao cliente filmmes.com ads';
	include("ads/head.php");
	include ("ads/atedimento1.php");

}elseif($geturl[1] == "ads" && $geturl[2] == "reclamacoes") {
	$title='Ver Filmes E Series Online Gratis No www.filmmes.com';
	include("ads/head.php");
	include ("ads/reclamacao1.php");

}elseif($geturl[1] == "ads" && $geturl[2] == "cadastrandopublicante1") {
	$title='Cadasntre-se й gratis';
	include("ads/head.php");
	include ("ads/cadastrandopublicante.php");

}elseif($geturl[1] == "ads" && $geturl[2] == "login") {
	$title='Fazer login no filmmes.com ads';
	include("ads/head.php");
	include ("ads/login1.php");

}else{
	$title='Erro pagina  nгo  encontrada  no filmmes ads';
	include("ads/head.php");
	include "ads/erro.php";
}
if($geturl[1] !="gls"){
include "ads/footer.php";
}else{
include "gls/footer.php";
}
?>