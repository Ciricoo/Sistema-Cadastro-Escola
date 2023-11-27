<?php

include_once('config.php');

    if(isset($_POST['update'])){

        $id = $_POST['id'];
        $nome =  $_POST['nome'];
        
        

        $sqlUpdate = "UPDATE turmas  SET nome='$nome'
        WHERE id='$id'";

        $result = $conexao->query($sqlUpdate);
    }
    
    header('Location: sistema.php');

?>