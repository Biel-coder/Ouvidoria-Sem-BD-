<?php
session_start();


$sugestao = $_REQUEST['sugestao'];
$usuario = $_SESSION['nome'];
$paciente = $_SESSION['nomePaciente'];


$headers = "From: ". $nome;

$corpoemail = '<b>Sugestão - Ouvidoria</b>
			
			   Paciente: '   .$paciente.' ;
			   Usuário: '.$usuario.' ;
			   Texto de SUGESTÃO: '.$sugestao.' /n';




if(mail("biel.s.maia@hotmail.com", "SUGESTÃO",$corpoemail,$headers)){


 	   echo "<script>alert('Mensagem enviada com sucesso!');</script>"."a sugestao: ".$sugestao;	
 	   header("Location: re_manifestacao.php");

} else{

      echo "<script>alert('Erro ao enviar, por favor tente novamente');</script>";	

}

?>