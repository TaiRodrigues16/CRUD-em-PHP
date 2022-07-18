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
      #tamanhoContainer {
        width: 500px;
      }

      #botao {
        background-color: #FEC68D;
        color: #ffffff
      }
      
      body{
            background-image: linear-gradient(to bottom, white, lightblue, pink);
      }

    </style>
      
      <?php //echo '<p>Hello World</p>'; ?> 

    <div class="container" id="tamanhoContainer" style="margin-top: 40px">

    <h4>Formulário de Cadastro </h4>


      <form action="pessoa_inserida.php" method="post" style="margin-top: 20px">

        <div class="form-group">
          <label>Nome</label>
          <input type="text" class="form-control" id="nome" autocomplete="off" name="nome" placeholder="Digite o Nome" required>
        </div>
        <div class="form-group">
          <label>E-mail</label>
          <input type="text" class="form-control" id="email" autocomplete="off" name="email" placeholder="name@example.com" required>
        </div>
        <div class="form-group">
          <label>Telefone</label>
          <input type="text" class="form-control" id="telefone" name="telefone" placeholder="(99) 9 9999-9999" autocomplete="off" required>
        </div>
        <div class="form-group">
          <label>Data de Nascimento</label>
          <input type="date" class="form-control" id="dataNasc" name="dataNasc" autocomplete="off" required>
        </div>

      <div style="text-align: right">
        <a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
        <button type="submit" id="botao" class="btn btn-primary botao">Cadastrar</button>
      </div>
    </form>
    </div>


  </body>
</html>