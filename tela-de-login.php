<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20,147,220), rgb(17,54,71));
        }
        div{
            font-size: 15px;
            background-color:rgba(0, 0, 0, 0.7) ;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 80px;
            border-radius: 15px;
            color: white;
        }
        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }
        .inputSubmit{
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            cursor: pointer;
        }
        .inputSubmit:hover{
            background-color: deepskyblue;
            cursor: pointer;
        }
        a{
            background-color:rgba(0, 0, 0, 0.7);
            border: none;
            padding: 15px;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            text-decoration: none;
        }
    </style>
</head>
<body>
<a href="home.php">Voltar</a>
    <div>
        <h1>login</h1>
        <form action="testLogin.php" method="POST">
        <input type="text" name="email" placeholder="Email">
        <br><br>
        <input type="password" name="senha" placeholder="Senha">
        <br><br>
        <input class="inputSubmit" type="submit" name="submit" value="Enviar">
        </form>
    </div>
</body>
</html>