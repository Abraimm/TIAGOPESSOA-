<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$nome 		= $_POST['name'];
$email 	= $_POST['email'];
$cidade 	= $_POST['cidade'];
$quantidade = $_POST['quantidade'];
$atuacao 	= $_POST['area_atuacao'];
$celular 		= $_POST['telefone'];
$servico 	= $_POST['servico'];
$tipo_telhado 	= $_POST['tipo_telhado'];
		
if($servico == 'Instalação de usinas fotovoltaica'){
	$url = 'https://api.whatsapp.com/send?phone=3399662708&text=Eu%20Sou:%20'.$nome.',%20Celular:%20'.$celular.',%20Cidade:%20'.$cidade.',%20Quantidade%20de%20placas:%20'.$quantidade.',%20Atuação:%20'.$atuacao.',%20Email:%20'.$email.',%20Serviço:%20'.$servico.',%20Telhado:%20'.$tipo_telhado;
}else{	
	$url = 'https://api.whatsapp.com/send?phone=3399662708&text=Eu%20Sou:%20'.$nome.',%20Celular:%20'.$celular.',%20Cidade:%20'.$cidade.',%20Quantidade%20de%20placas:%20'.$quantidade.',%20Atuação:%20'.$atuacao.',%20Email:%20'.$email.',%20Serviço:%20'.$servico;
}	
		


echo"<script type='text/javascript'>";
echo"alert('Você será redirecionado para o Whastapp da empresa');" ;
echo"window.location = '$url';";
echo"</script>";