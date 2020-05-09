<?php
session_start();
$_SESSION['nome'] = $_POST['nomeUsuario'];
$_SESSION['nomePaciente'] = $_POST['nomePaciente'];

if($_SESSION['nome']){
header("Location: ouvidoria.php");
} else {
    header("Location: index.php");
}
?>










<!--
 // ########## TENTATIVA COM O BANCO DE DADOS ###########

/*include_once("conexao.php");
if(isset($_POST['nome']) && (isset($_POST['senha']))){
    $usuario = mysqli_real_escape_string($conn, $_POST['nome']);
    $senha = mysqli_real_escape_string($conn, $_POST['senha']);
    

    $sql = "SELECT * FROM usuarios WHERE nome = '$usuario' && senha = '$senha' LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $resultado = mysqli_fetch_assoc($result);

    if(empty($resultado)){
        $_SESSION['loginErro'] = "Usuário ou Senha Inválidos";
        header("Location: index.php");
    } elseif(!empty($resultado)){
        $_SESSION['usuarioNome'] = $resultado['nome'];
        $_SESSION['usuarioSenha'] = $resultado['senha'];
        header("Location: ouvidoria.php");
    } else{
        $_SESSION['loginErro'] = "Usuário ou Senha inválido";
        header("Location: index.php");
    }

}else{
    $_SESSION['loginErro'] = "Usuário ou Senha inválido";
}
 
-->
