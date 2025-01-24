<?php

    include './DB/connect.php';
    if(isset($GET['id'])){

        $id_recebido = $_GET['id'];

        $sql = "SELECT * FROM cliente WHERE id = $id_recebido";
        $result = mysqli_query($conn,$sql);

        $cliente = mysqli_fetch_assoc($result);


        var_dump($result);
    
    }else{
        header ('location: index.php');
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
    <link rel='stylesheet' href='<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">'>
</head>
<body>
    <header>
        <ul>
            <li> <a href="index.php"> Cadastrar </a> </li>
            <li> <a href="listar.php"> Lista </a> </li>

        </ul>
    </header>
    <h1>Editar Cliente</h1>
    <form method="POST" action="cadastra_cli.php">
        
            


        </div>
        <input type="text" name="nome" id="nome" placeholder="Digite seu nome" value="<?php echo $cliente['nome']; ?>" >
        <br>
        <input type="text" name="cpf" id="cpf" placeholder="Digite seu CPF" value="<?php echo $cliente['cpf']; ?>" >
        <br>
        <input type="text" name="fone" id="fone" placeholder="Digite seu telefone" value="<?php echo $cliente['fone']; ?>" >
        <br>
        <input type="email" name="email" id="email" placeholder="Digite seu email" value="<?php echo $cliente['email']; ?>" >
        <br>
        <input type="password" name="pass" id="pass" placeholder="Digite sua senha">
        <input type="password" name="conf_pass" id="conf_pass" placeholder="Confirme sua senha">
        <input class ='btn-sucess'type="submit" name="cadastrar" value="Cadastrar">
    </form>
</body>
</html>
