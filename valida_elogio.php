
<?php
session_start();

$satisfacao = $_POST['satisfacao'];
$indica = $_POST['indica'];
$nota = $_POST['nota'];
$elogio = $_REQUEST['elogio'];
$usuario = $_SESSION['nome'];
$paciente = $_SESSION['nomePaciente'];
// RELÓGIO

$data = $_SESSION['data'];



$headers = "From: ". $nome;

$corpoemail = '### Elogio - Ouvidoria ###
			
			   Data: '.$data.'
			   
			   Paciente: '   .$paciente.' 
			   Usuário: '.$usuario.'
			   Satisfação: '.$satisfacao.' 
			   Indica: '.$indica.' 
			   Nota: '.$nota.'
			   
			   
			   Texto de ELOGIO: '.$elogio.' ';




if(mail("biel.s.maia@hotmail.com", "ELOGIO",$corpoemail,$headers)){


 	   echo "<script>alert('Mensagem enviada com sucesso!');</script>".$nome.$satisfacao.$indica.$nota.$elogio;	
 	   header("Location: re_manifestacao.php");

} else{

      echo "<script>alert('Erro ao enviar, por favor tente novamente');</script>";	

}

?>


<!--

<?php
/*session_start();
include_once("conexao.php");

$elogio = $_REQUEST['elogio'];
$usuario = $_SESSION['usuarioNome'];


$result_elogio = "INSERT INTO Elogios (usuario, elogio) VALUES ('$usuario','$elogio')";
$resultado_elogio = mysqli_query($conn, $result_elogio);

echo "Seu nome é ".$usuario.". Seu texto é: ".$elogio;

--> */