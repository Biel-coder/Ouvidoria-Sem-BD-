<?php 
session_start();
if($_SESSION['nome']){

require('header.php');

require('body.php');

}else{
  header("Location: index.php");
}
?>