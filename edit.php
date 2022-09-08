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

    header('location: contato.php');
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="contato.css">
    
    <link rel="stylesheet" href="vai.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
</head>

<body>





           <!--banner-->
   




          
<!--contato-->



          <div class="contact section-padding" data-scroll-index='4'>
            <div class="container">
              <div class="row">     
                </div>
                <div class="col-lg-12 col-md-8">
                  <div class="contact-form">
                    <form class='form' id='contact-form' method='POST' action="contato.php" data-toggle='validator'>
                      <div class="messages"></div>
                      <div class="controls">
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="form-group">
                              <input id="form_name" type="text" name="nome" placeholder="Nome completo *" required data-error="name is required.">
                              <div class="help-block with-errors"></div>
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="form-group">
                              <input id="form_email" type="text" name="apelido" placeholder="apelido" required data-error="Valid email is required.">
                              <div class="help-block with-errors"></div>
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="form-group">
                              <input id="form_email" type="text" name="endereco" placeholder="endereco" required data-error="Valid email is required.">
                              <div class="help-block with-errors"></div>
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="form-group">
                              <input id="form_email" type="email" name="email" placeholder="email" required data-error="Valid email is required.">
                              <div class="help-block with-errors"></div>
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="form-group">
                              <input id="form_email" type="number" name="telefone" placeholder="telefone" required data-error="Valid email is required.">
                              <div class="help-block with-errors"></div>
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="form-group">
                              <input id="form_email" type="text" name="assunto" placeholder="assunto" required data-error="Valid email is required.">
                              <div class="help-block with-errors"></div>
                            </div>
                          </div>
                
                          </div>
                          <div class="col-lg-12 form-group">
                            <textarea id="form_message" name="mensagem" class="form-control" placeholder=" Coloque aqui a mensagem " rows="4" required data-error="Please,leave us a message."></textarea>
                            <div class="help-block with-errors"></div>
                          </div>
                          <div class="col-lg-12 text-center">
                            <button class="bttn" name="submit">Enviar</button>
                            <button class="btn btn-danger"  name="submit">Sair</button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        
     
         
   
       
  <!--Mapa Google-->
  
    
    


    </script>
    <!-- JavaScript Bundle with Popper -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>