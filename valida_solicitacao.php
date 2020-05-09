<?php
session_start();


$solicitacao = $_REQUEST['solicitacao'];
$usuario = $_SESSION['nome'];
$paciente = $_SESSION['nomePaciente'];

$headers = "From: ". $nome;

$corpoemail = '### Solicitação - Ouvidoria ###
			
			   Paciente: '   .$paciente.' ;
			   Usuário: '.$usuario.' ;
			   Texto de SOLICITAÇÃO: '.$solicitacao.' ';




if(mail("biel.s.maia@hotmail.com", "SOLICITAÇÃO",$corpoemail,$headers)){


 	   echo "<script>alert('Mensagem enviada com sucesso!');</script>";	
       header("Location: re_manifestacao.php");

} else{

      echo "<script>alert('Erro ao enviar, por favor tente novamente');</script>";	

}

?>