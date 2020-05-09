<?php
session_start();

$satisfacao = $_POST['satisfacao'];
$indica = $_POST['indica'];
$nota = $_POST['nota'];
$reclamacao = $_REQUEST['reclamacao'];
$usuario = $_SESSION['nome'];
$paciente = $_SESSION['nomePaciente'];

$headers = "From: ". $nome;

$corpoemail = '### Reclamação - Ouvidoria ###
			
			   Paciente: '.$paciente.' ;
			   Usuário: '.$usuario.' ;
			   Satisfação: '.$satisfacao.' ;
			   Indica: '.$indica.' ;
			   Nota: '.$nota.' ;
			   ########################################
			   Texto de RECLAMAÇÃO: '.$reclamacao.' ;';




if(mail("biel.s.maia@hotmail.com", "RECLAMACAO",$corpoemail,$headers)){


 	   echo "<script>alert('Mensagem enviada com sucesso!');</script>";	
 	   header("Location: re_manifestacao.php");

} else{

      echo "<script>alert('Erro ao enviar, por favor tente novamente');</script>";	

}

?>