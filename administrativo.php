<div  class="containere">

<?php

include_once("config.php");

session_start();
if(!empty($_SESSION['id'])){
	echo "  Olá ".$_SESSION['nome'].", BEM VINDO <br>";
	echo "<a class='vaist' href='sair.php'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-arrow-right-square' viewBox='0 0 16 16'>
  <path fill-rule='evenodd' d='M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm4.5 5.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z'/>
</svg></a>";
}else{
	$_SESSION['msg'] = "Área restrita";
	header("Location: login.php");	
}

$sql = "SELECT  * FROM usuarios123 ORDER BY id DESC";

$result = $conexao->query($sql);





/* //////////////////////////////////////// */





?>



</div>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
<link
rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
/>
</head>

<body>
	

<style>
	
	.container{
		display:flex;
		flex-wrap: wrap;
		justify-content:center;
	}

  .containere{
    display:flex;
    justify-content:space-around;
    padding:20px;
    background-color:rgb(0,135,183);
    color:white;
  }

  .vaist{
    color:white;
  }
a{
  color:white;
  text-decoration: none;
}
a:hover{
  color:white;
}

.tete{
  color:white;
  font-size:2em;
}

.reset{
  display:flex;
  justify-content:center;
  padding: 2em;
  margin:10px;
  flex-wrap: wrap;
}
.card{
 
  margin:10px;
}

.icone{
  font-size: 4em;
}
</style>

<a href="painel1.php" style="color:red;">
<div class="reset">
<div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
  <div class="card-header"><div class="animate__animated animate__shakeX"><ion-icon class="icone" name="chatbox-outline"></ion-icon></div></div>
  <div class="card-body">
    <h5 class="card-title"><?php print_r(" Mensagem $result->num_rows");   ?></h5>
    <p class="card-text"></p>
  </div>
</div>
</a>
<a href="painel1.php" style="color:red;">
<div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
  <div class="card-header">  <div class="animate__animated animate__shakeX"> <ion-icon class="icone" name="notifications-circle-outline"></ion-icon></div></div>
  <div class="card-body">
    <h5 class="card-title">Inscritos</h5>
    <p class="card-text"></p>
  </div>
</div>
</a>
<a href="painel1.php" style="color:red;">
<div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
  <div class="card-header"><ion-icon class="icone" name="people-circle-outline"></ion-icon></div>
  <div class="card-body">
    <h5 class="card-title">Novo Cadastro</h5>
    <p class="card-text"></p>
  </div>
</div>
</a>
<div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
  <div class="card-header"><ion-icon class="icone" name="heart-half-outline"></ion-icon></div>
  <div class="card-body">
    <h5 class="card-title">Doações</h5>
    <p class="card-text"></p>
  </div>
</div>
</div>

</script>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>




