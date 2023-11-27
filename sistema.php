<?php
session_start();
include_once('config.php');
//print_r($_SESSION);

if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
{
    
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: tela-de-login.php');
}
    
$logado = $_SESSION['email'];

$sql = "SELECT * FROM turmas ORDER BY id DESC";

$result = $conexao->query($sql);                                                   

//print_r($result);



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Sistema | Senai</title>
    <style>

        body{
            font-family: Arial, Helvetica, sans-serif;
            font-size: 12px;
            background-image: linear-gradient(to right, rgb(20,147,220), rgb(17,54,71));
            text-align: center;
            color: white;
        }
        .table-bg{
            background: rgba(0,0,0,0.3);
            border-radius:15px 15px 0px 0px;
        }

    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand  " href="#">Sistema | Senai</a>
  </div>
  <div class="d-flex">
        <a href="sair.php" class="btn btn-danger me-5">Sair</a>
  </div>
</nav>
<br/>
    <?php
    echo"<h1>Bem vindo <u>$logado</u></h1>";
    
    ?>

    <a class="butao" href="formulario_turma.php">Cadastro Turma</a>
        </form>

    <style>
        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 13px;
        }
        .butao{
            background-color: dodgerblue;
            border: none;
            padding: 10px;
            width: 10%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            margin-left: 70%; 
        }
        .inputSubmit:hover{
            background-color: deepskyblue;
            cursor: pointer;
        }

        .title-turmas{
            display:flex;
            align-items: left;
            justify-content: left;
            color: black;
            border: none;
            outline: none;
            font-size: 15px;
        }
    </style>

    <div class="m-5">
        <h1 class=" title-turmas "> <b>Turmas</b></h1>
            <table class="table text-white table-bg">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>       
            <th scope="col">...</th>
            </tr>
        </thead>
        <tbody>
            <?php           

            
            while($user_data = mysqli_fetch_assoc($result)){

                echo"<tr>";
                echo"<td>".$user_data['id']."</td>";
                echo"<td>".$user_data['nome']."</td>";
                
                
                echo"<td>
                    <a class='btn btn-sm btn-primary' href='edit.php?id=$user_data[id]'>
                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                        <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                        </svg>
                        </a>
                        <a class='btn btn-sm btn-danger' href='delete.php?id=$user_data[id]'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                            <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                            </svg>
                        </a>
                    </td>";
                echo"</tr>";      
            }
            
            ?>
        </tbody>
        </table>
    </div>

    <a class="butao" href="vizualizar.php">Vizualizar Atividas das Turmas</a>
</body>
</html>