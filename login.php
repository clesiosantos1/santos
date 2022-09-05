
<?php
session_start();
?>

<?php
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
		?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">	
</head>
<body>
	
</body>
</html>

<style>
	form{
		border-radius: 5px;
		border: 1px solid white;
		padding:40px;
		background-color:#ef4b3f;
	}

	.container{
		
	}
</style>




<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Celke - Login</title>
	</head>
	<body>
	

		<div class="container">
		<div class="d-flex justify-content-center">
		<div class="col-8">

		<h1>Área Restrita</h1>
		<form method="POST" action="valida.php">
		<div class="input-group mb-3">
         <span class="input-group-text" id="basic-addon1"><ion-icon name="person-circle-outline"></ion-icon></span>
      <input type="text"  name="usuario" placeholder="Digite o seu usuário" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
         </div>
		<div class="input-group mb-3">
         <span class="input-group-text" id="basic-addon1"><ion-icon name="key-outline"></ion-icon></span>
      <input  type="password" name="senha" placeholder="Digite a sua senha" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
         </div>
		 <input class="btn btn-danger" type="submit" name="btnLogin" value="Acessar">
		 <button class="btn btn-primary"><a style="color:white; text-decoration:none;" href="index.html">Voltar</a></button>
		</form>
		</div>
			</div>
		</div>
	
	</body>
</html>