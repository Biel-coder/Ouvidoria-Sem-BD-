<?php
session_start();
if($_SESSION['nome']){
    require('body_reclamacao.php');
    }else{
        header("Location: index.php");
    }



?>