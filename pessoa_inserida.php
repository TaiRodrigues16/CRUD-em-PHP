<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include('conexao.php');

$nome=$_POST['nome'];
$email=$_POST['email'];
$telefone=$_POST['telefone'];
$dataNasc=$_POST['dataNasc'];

$sql =        "INSERT INTO `agenda` ";
$sql = $sql . "(`nome`, `email`, `telefone`, `dataNasc`) ";
$sql = $sql . "VALUES ('$nome','$email','$telefone','$dataNasc')";

//echo $sql;
//die();
$inserir = mysqli_query($conexao,$sql);

?>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulário de Cadastro de Animais</title>  
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <style type="text/css">
      
      body{
            background-image: linear-gradient(to bottom, white, lightblue, pink);
      }

    </style>

	<div class="container" style="widht: 500px;margin-top: 20px">
		<h4>Pessoa inserida com Sucesso!</h4>
	</div>
	<center>
		<a href="inserir.php" role="button" class="btn btn-sm btn-primary">Cadastrar nova pessoa</a>
		<a href="index.php" role="button" class="btn btn-sm btn-primary">Pagina Principal</a>
	</center>
</body>
</html>