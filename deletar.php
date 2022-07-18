<?php
include('conexao.php');

$id = $_GET['id'];

$sql =        "DELETE FROM agenda ";
$sql = $sql . "WHERE id=$id;";

$inserir = mysqli_query($conexao,$sql);


//echo $id;
?>

<html>
<head>
	<meta charset="utf-8">
	<title>Formulário de Cadastro de Animais</title>  
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
		<h4>Pessoa excluída com sucesso</h4>
	</div>
	<center>
		<a href="listar.php" role="button" class="btn btn-sm btn-primary">Listagem de Pessoas</a>
		<a href="index.php" role="button" class="btn btn-sm btn-primary">Pagina Principal</a>
	</center>
</body>
</html>
