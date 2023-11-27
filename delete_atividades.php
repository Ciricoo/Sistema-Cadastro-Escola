<?php

if(!empty($_GET['id']))
{

    include_once('config.php');

    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM atividade_turmas WHERE id=$id";

    $result = $conexao->query($sqlSelect);

    if($result-> num_rows > 0){
        
        $sqlDelete = "DELETE FROM atividade_turmas WHERE id=$id";
        $resultDelete = $conexao->query($sqlDelete);           
        }
    }

header('Location: vizualizar.php');

?>