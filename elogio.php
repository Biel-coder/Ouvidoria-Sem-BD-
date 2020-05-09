<?php
session_start();
if($_SESSION['nome']){
require('body_elogio.php');
}else{
    header("Location: index.php");
}
