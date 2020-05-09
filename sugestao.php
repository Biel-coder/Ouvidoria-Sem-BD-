<?php
session_start();
if($_SESSION['nome']){
        require('body_sugestao.php');
    }else{
        header("Location: index.php");
    }



?>