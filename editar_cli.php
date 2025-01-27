<?php
    // 1 - conecta ao banco
    include './DB/connect.php';
    
    // 2 - receber o id via GET
    if(isset($_GET['id'])){

        $id_recebido = $_GET['id'];
        // 3 - selecionar o cliente pelo ID
        $sql = "SELECT * FROM cliente WHERE id = $id_recebido";
        // 4 - converter para um array 
        $result = mysqli_query($conn,$sql);

        $cliente = mysqli_fetch_assoc($result);

        //DEBUGGING 

        var_dump($cliente);
    
    }
    else{
        header ('location: index.php');
    }

if(isset($_POST['editar']))
{
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $fone = $_POST['fone'];

    $sql_update = " UPDATE cliente SET nome= '$nome', cpf= '$cpf', email= '$email', fone= '$fone' WHERE id = $id_recebido ";

    $result_update = mysqli_query($conn,$sql_update);

    if($result_update){
        echo '<script> alert("Cliente atualizado com sucesso")</script>';
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
</head>
<body>
    <header>
        <ul>
            <li> <a href="index.php"> Cadastrar </a> </li>
            <li> <a href="listar.php"> Lista </a> </li>

        </ul>
    </header>
    <h1>Editar Cliente</h1>
    <form method="POST">
        
        </div>
        <input type="text" name="nome" id="nome" placeholder="Digite seu nome" value="<?php echo $cliente['nome']; ?>" >
        <br>
        <input type="text" name="cpf" id="cpf" placeholder="Digite seu CPF" value="<?php echo $cliente['cpf']; ?>" >
        <br>
        <input type="text" name="fone" id="fone" placeholder="Digite seu telefone" value="<?php echo $cliente['fone']; ?>" >
        <br>
        <input type="email" name="email" id="email" placeholder="Digite seu email" value="<?php echo $cliente['email']; ?>" >
        <br>
    
        <input class='btn btn-success'type="submit" name="editar" value="Editar">
        <button type="reset" class= "btn btn-danger">Cancelar</button>
    </form>

</body>
</html>
