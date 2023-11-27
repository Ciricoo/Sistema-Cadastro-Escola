<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site | SENAI</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20,147,220), rgb(17,54,71));
            text-align: center;
            color: white;
        }
        .box{
            position:absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0,0,0, 0.6);
            padding: 30px;
            border-radius:10px;
        }
        a{
            text-decoration: none;
            color: white;
            border: 3px solid dodgerblue;
            border-radius: 10px;
            padding:10px;
        }
        a:hover{
            background-color: dodgerblue;
        }
        
    </style>
</head>
<body>
    <h1>Sistema em PHP</h1>
    <h2>João Vitor Círico</h2>
    <div class="box">
        <a href="tela-de-login.php">Login</a>
        <a href="formulario.php">Cadastro Professor</a>
    </div>
</body>
</html>