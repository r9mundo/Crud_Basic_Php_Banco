<?php

include './DB/connect.php';
if(isset($_POST['cadastrar'])){

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$fone = $_POST['fone'];
$pass = $_POST['pass'];
$conf_pass = $_POST['conf_pass'];

$sql = "INSERT INTO cliente (nome, cpf, fone, email) VALUES ('$nome', '$cpf', '$fone', '$email')";

$result = mysqli_query($conn,$sql);

if($result){
    echo 'Cadastrado com sucesso';

}else{
    die (maysqli_error($conn));
}

}


