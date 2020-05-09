<h4 class="text-center cor py-3">
<?php
    if($_SESSION['nome']){  
    echo "<p><strong>Paciente</strong>: ". $_SESSION['nomePaciente']."</p>";    
    echo "<strong>Usuário</strong>: ". $_SESSION['nome'];
    }else{
        header("Location: index.php");
    }
?>
</h4>

<br>
<div class="text-center"><a href="sair.php"><button class="btn btn-danger">SAIR</button></a></div>

</body>
</html>