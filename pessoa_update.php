<?php

include('conexao.php');

$id=$_POST['id'];
$nome=$_POST['nome'];
$email=$_POST['email'];
$telefone=$_POST['telefone'];
$dataNasc=$_POST['dataNasc'];

//$echo '---';
$sql =        "UPDATE agenda SET ";
$sql = $sql . "nome='$nome', ";
$sql = $sql . "email='$email', ";
$sql = $sql . "telefone='$telefone' ";
$sql = $sql . "dataNasc='$dataNasc' ";
$sql = $sql . "WHERE id=$id;";


//echo
//$sql = $sql . "WHERE id=$id;";
//echo $sql;
//die();

$inserir = mysqli_query($conexao,$sql);

?>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulário de Cadastro de Pessoas</title>  
	<link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/starter-template/">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">

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
		<h4>Pessoa atualizada</h4>
	</div>
	<center>
		<a href="listar.php" role="button" class="btn btn-sm btn-primary">Listagem de pessoas</a>
        <a href="index.php" role="button" class="btn btn-sm btn-primary">Pagina Principal</a>
		
	</center>
</body>
</html>