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
    <link rel="stylesheet" href="bulma.min.css">
    <link rel="stylesheet" href="vai.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
</head>
<style>
  

  .navbar-expand-lg {
    background-color: rgb(255, 255, 255);
    min-height:8em;  
  }
  
  .button.is-medium {
    font-size: 1.25rem;
    width: 100%;
    color: white;

  }

  </style>
  
<body>



<div class="containerss top-bar" >
    <div>
     <ion-icon  class="anco" name="mail"></ion-icon>
    <a href="mailto:lardacaridade.vinhedo@gmail.com">lardacaridade.idosodo@gmail.com</a>
  </div>
  <div></div>
  <div></div>
    <div>
    </div>
    <div>
      <ion-icon class="anco" name="logo-instagram"></ion-icon>
      <ion-icon class="anco" name="logo-facebook"></ion-icon>
      <ion-icon class="anco" name="logo-google"></ion-icon>
      <ion-icon class="anco" name="logo-youtube"></ion-icon>
      <ion-icon class="anco" name="logo-instagram"></ion-icon>
      <a href="login.php"><ion-icon  class="anco" name="enter-outline"></ion-icon></a> 
    </div>
  </div>



<!--menu-->
    <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img class="logo" id="letra" src="img/22222.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" id="texte" aria-current="page" href="index.html"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
            <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
          </svg> Lar de caridade</a></a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" id="texte" href="quem.html">Quem somos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" id="texte" href="missa.html">Missão</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" id="texte" href="portal.html" tabindex="-1" aria-disabled="true">Portal de transparência</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" id="texte" href="contato.php" tabindex="-1" aria-disabled="true">Contacto</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>


           <!--banner-->
           <div id="treino">
            <div class="item3">
             
             <h1>Fale Conosco</h1> 
          </div>
       
          </div>

<!--contato-->

          <div class="contact section-padding" data-scroll-index='4'>
            <div class="container">
              <div class="row">
                <div class="col-md-12 section-title text-center">
                  <span class="section-title-line"></span> </div>
                <div class="col-lg-5 col-md-4">
                  <div class="part-info">
                    <div class="info-box">
                      <div class="icon"> <i class="fas fa-phone"></i> </div>
                      <div class="content">
                        <h4>Telefone</h4>
                        <p>+224 927152537<br>
                       +244 931643911
                        </p>
                      </div>
                    </div>
                    <div class="info-box">
                      <div class="icon"> <i class="fas fa-map-marker-alt"></i> </div>
                      <div class="content">
                        <h4>Endereço</h4>
                        <p>Angola, Luanda </p>
                      </div>
                    </div>
                    <div class="info-box">
                      <div class="icon"> <i class="fas fa-envelope"></i> </div>
                      <div class="content">
                        <h4>E-mail</h4>
                        <p><a href="#" style="color: rgb(0, 0, 0);">ics0571275@gmail.com</a></p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-7 col-md-8">
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
  
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126153.01039519216!2d13.214063286848631!3d-8.853356215276337!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a51f15cdc8d2c7d%3A0x850c1c5c5ecc5a92!2sLuanda!5e0!3m2!1spt-BR!2sao!4v1662036757321!5m2!1spt-BR!2sao" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  

  <!--footer-->

      <!-- Footer -->
      <footer class="text-center text-lg-start  text-muted" style="background-color:#328CC1;">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
          <!-- Left -->
          <div class="me-5 d-none d-lg-block">
            <span style="color: white;">ESTIMULANDO O BEM ESTAR EM TERÇEIRA IDADE</span>
            <ion-icon name="qr-code-outline"></ion-icon>
          </div>
          <!-- Left -->
      
          <!-- Right -->
          <div>
           
              <ion-icon></ion-icon></a>
              <a href=""><ion-icon name="logo-instagram" style="color: white;"></ion-icon></a>
              <a href=""><ion-icon name="logo-google" style="color: white;"></ion-icon></a>
              <a href=""><ion-icon name="logo-youtube" style="color: white;"></ion-icon></a>
              <a href="area.php"><ion-icon name="enter-outline" style="color: white;"></ion-icon></a>
          
       </div>
          <!-- Right -->
        </section>
        <!-- Section: Social media -->
      
        <!-- Section: Links  -->
        <section class="">
          <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
              <!-- Grid column -->
              <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                <!-- Content -->
                <h6 style="color: white;" class="text-uppercase fw-bold mb-4">
                  <i class="fas fa-gem me-3"></i>Lar de Caridade
                </h6>
                <img src="img/22222.png" style="border-radius: 50%;" id="ccc" alt="">
              </div>
              <!-- Grid column -->
      
              <!-- Grid column -->
              <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                <!-- Links -->
                <h6 style="color: white;" class="text-uppercase fw-bold mb-4">
                  Produtos de Doação
                </h6>
                <p style="color: white;">
                  <a  style="color: white; text-decoration:none;" href="#!" class="text-reset">Alimentos</a>
                </p>
                <p style="color: white;">
                  <a  style="color: white; text-decoration:none;" href="#!" class="text-reset">Roupas</a>
                </p>
                <p style="color: white;">
                  <a  style="color: white; text-decoration:none;"  href="#!" class="text-reset">Material Escolar</a>
                </p>
                <p style="color: white;">
                  <a  style="color: white; text-decoration:none;" href="#!" class="text-reset">Extras</a>
                </p>
              </div>
              <!-- Grid column -->
      
              <!-- Grid column -->
              <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                <!-- Links -->
                <h6 style="color: white;" class="text-uppercase fw-bold mb-4">
                  Estamos Localizados
                  <ion-icon name="pin-outline"></ion-icon>
                </h6>
                <p style="color: white; text-decoration:none;">
                  <a style="color: white; text-decoration:none;" href="#!" class="text-reset">Luanda</a>
                </p>
                <p style="color: white; text-decoration:none;">
                  <a style="color: white; text-decoration:none;" href="#!" class="text-reset">Benguela</a>
                </p>
                <p style="color: white; text-decoration:none;">
                  <a style="color: white; text-decoration:none;" href="#!" class="text-reset">Malanje</a>
                </p>
                <p style="color: white; text-decoration:none;">
                  <a style="color: white; text-decoration:none;" href="#!" class="text-reset">Cabinda</a>
                </p>
              </div>
              <!-- Grid column -->
      
              <!-- Grid column -->
              <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                <!-- Links -->
                <h6 style="color: white; text-decoration:none;" class="text-uppercase fw-bold mb-4">Contacto</h6>
                <p style="color: white; text-decoration:none;"><i class="fas fa-home me-3"></i> Luanda, LD 10012, AO</p>
                <p style="color: white; text-decoration:none;">
                  <i class="fas fa-envelope me-3"></i>
                  Lcaridade@gmail.com
                </p>
                <p style="color: white; text-decoration:none;"><i class="fas fa-phone me-3"></i> + 244 567 886 46</p>
                <p style="color: white; text-decoration:none;"><i class="fas fa-print me-3"></i> + 244 234 567 89</p>
              </div>
              <!-- Grid column -->
            </div>
            <!-- Grid row -->
          </div>
        </section>
     
      <!-- carlos  Cor -->
        <!-- Copyright -->
        <div class="text-center p-4" style="background:#328CC1; color: white;">
          © 2021 Copyright:
          <a class="text-reset fw-bold" href="https://mdbootstrap.com/" style="text-decoration:none;">LarCaridade.com</a>
          <ion-icon name="qr-code-outline" ></ion-icon>
        </div>
        <!-- Copyright -->
      </footer>
      <!-- Footer -->
    
    


    </script>
    <!-- JavaScript Bundle with Popper -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>