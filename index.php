<?php

include './DB/connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
    <link rel='stylesheet' href='./css/style.css'>
</head>
<body>
    <h1>Cadastro de Cliente</h1>
    <form method="POST" action="cadastra_cli.php">
        <input type="text" name="nome" id="nome" placeholder="Digite seu nome">
        <br>
        <input type="text" name="cpf" id="cpf" placeholder="Digite seu CPF">
        <br>
        <input type="text" name="fone" id="fone" placeholder="Digite seu telefone">
        <br>
        <input type="email" name="email" id="email" placeholder="Digite seu email">
        <br>
        <input type="password" name="pass" id="pass" placeholder="Digite sua senha">
        <input type="password" name="conf_pass" id="conf_pass" placeholder="Confirme sua senha">
        <input type="submit" name="cadastrar" value="Cadastrar">
    </form>
</body>
</html>
