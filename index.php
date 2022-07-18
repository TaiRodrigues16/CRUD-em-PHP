<html lang="pt-BR">

    <head>
    <meta charset="utf-8">
    <meta name="author" content="Taiane Rodrigues">
    <title>CRUD - Agenda</title>
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
        
            .card{
                background-color: #FBF8EF;
            }

        </style>
        
        <div class="container" id="tamanhoContainer" style="margin-top: 40px">

            <div class="row">
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Adicionar Pessoa</h5>
                    <p class="card-text">Cadastrar uma nova pessoa no sistema.</p>
                    <a href="inserir.php" class="btn btn-primary">Adicionar</a>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Listar Pessoas</h5>
                    <p class="card-text">Listar Pessoas cadastradas no sistema.</p>
                    <a href="listar.php" class="btn btn-primary">Listagem</a>
                  </div>
                </div>
              </div>
            </div>

        </div>

    
    </body>

</html>