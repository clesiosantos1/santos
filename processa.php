<?php

include_once("config.php");

if(isset($_POST['submit'])){
    $nome = $_POST['nome'];
    $apelido = $_POST['apelido'];
    $endereco = $_POST['endereco'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios123 (nome,apelido,endereco,email,telefone,assunto,mensagem)  VALUES ('$nome','$apelido','$endereco','$email','$telefone','$assunto','$mensagem') ");

    header('location: contato.html');
}


?>