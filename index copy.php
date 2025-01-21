<?php

include './DB/connect.php';

$nome = 'Fernanda';
$cpf = '15154151555';
$fone = '67952145212';
$email = 'fernanda@gmail.com';

$sql = "INSERT INTO cliente VALUES (default,'$nome','$cpf','$fone','$email')";

$res = mysqli_query($conn,$sql);

if($res){
    
    echo '<script> alert("Cadastrado com sucesso!") </script>';
}else{
    echo 'Erro ao cadastrar';
}