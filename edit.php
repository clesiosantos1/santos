<?php


/* se nao est5iver vazio */
if(!empty($_GET['id']))
{


  include_once("config.php");

  $id =  $_GET['id'];

  $sqlselect = "SELECT * FROM  usuarios123 WHERE id=$id";

  $result = $conexao->query($sqlselect);

  if($result->num_rows > 0){


    while($user_data = mysqli_fetch_assoc($result))
    {
        $nome = $user_data['nome'];
        $apelido = $user_data['apelido'];
        $endereco = $user_data['endereco'];
        $email = $user_data['email'];
        $telefone = $user_data['telefone'];
        $assunto = $user_data['assunto'];
        $mensagem = $user_data['mensagem'];
     }
 print_r($apelido);
  }
  else
  {
  header('location: administrativo.php'); 
  }

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
<style>
  .foi{
   background-color:rgb(0,135,183);
  margin:1em;
}
</style>
</head>

<body style="background-color:rgb(0,135,183);">





           <!--banner-->
   




          
<!--contato-->



          <div class="contact section-padding" data-scroll-index='4'>
            <div class="container">
              <div class="row">     
                </div>
                <div class="col-lg-12 col-md-8">
                  <div class="contact-form">
                    <form class='form' id='contact-form' method='POST' action="save.php" data-toggle='validator'>
                      <div class="messages"></div>
                      <div class="controls">
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="form-group">
                              <input id="form_name" type="text" name="nome" placeholder="Nome completo *" required data-error="name is required." value="<?php echo $nome;  ?>">
                              <div class="help-block with-errors"></div>
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="form-group">
                              <input id="form_email" type="text" name="apelido" placeholder="apelido" required data-error="Valid email is required." value="<?php echo $apelido;  ?>"> 
                              <div class="help-block with-errors"></div>
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="form-group">
                              <input id="form_email" type="text" name="endereco" placeholder="endereco" required data-error="Valid email is required." value="<?php echo $endereco;  ?>">
                              <div class="help-block with-errors"></div>
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="form-group">
                              <input id="form_email" type="email" name="email" placeholder="email" required data-error="Valid email is required." value="<?php echo $email  ?>">
                              <div class="help-block with-errors"></div>
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="form-group">
                              <input id="form_email" type="number" name="telefone" placeholder="telefone" required data-error="Valid email is required." value="<?php echo $telefone ?>">
                              <div class="help-block with-errors"></div>
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="form-group">
                              <input id="form_email" type="text" name="assunto" placeholder="assunto"  required data-error="Valid email is required."  value="<?php echo $assunto ?>">
                              <div class="help-block with-errors"></div>
                            </div>
                          </div>
                          <div class="col-lg-12">
                            <div class="form-group">
                              <input id="form_email" type="text" name="mensagem" placeholder="mensagem"  required data-error="Valid email is required."  value="<?php echo $mensagem ?>">
                              <div class="help-block with-errors"></div>
                            </div>
                          </div>
                          </div>                      
                          <div class="col-lg-12 text-center">
                            <div class="foi">
                              <input  type="submit" class="btn btn-dark" name="submit" id="submit" value="Salvar" >
                            <!--<button class="btn btn-dark" name="submit" id="submit">Salvar</button>-->
                            <button class="btn btn-danger"  name="submit" ><a style="text-decoraction:none; color:white;" href="administrativo.php">Sair</a></button>
                            </div>
                    
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