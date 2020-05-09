<?php
session_start();
if($_SESSION['nome']){
        require('body_solicitacao.php');
    }else{
        header("Location: index.php");
    }



?>