
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./Css/style.css">
    <title>Sistema do Eliandro</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar- bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./App/Paginas/sobre.php">Sobre</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index_cadusuarios.php">Cadastro</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Contato</a>
              </li>
          
            </ul>
          </div>
        </div>
      </nav>
      <?php require 'grid_img.html';  ?>
    <div class="p-5 bg-dark text-white">
        <h1>Sistema do Eliandro</h1>
    
    </div>
  
    <div class="container2">
      <div class="container3">
        <div class="title delay0">O</div>
        <div class="space"></div>
        <div class="title delay1">C</div>
        <div class="title delay2">o</div>
        <div class="title delay3">m</div>
        <div class="title delay4">b</div>
        <div class="title delay5">a</div>
        <div class="title delay6">t</div>
        <div class="title delay7">e</div>
        <div class="space"></div>
        <div class="title delay8">d</div>
        <div class="title delay9">e</div>
        <div class="space"></div>
        <div class="title delay1">E</div>
        <div class="title delay2">q</div>
        <div class="title delay3">u</div>
        <div class="title delay4">i</div>
        <div class="title delay5">p</div>
        <div class="title delay6">e</div>
        <div class="title delay7">s</div>
        <div class="space"></div>
        <div class="title delay8">A</div>
        <div class="title delay9">R</div>
        <div class="title delay1">D</div>
        <div class="title delay2">U</div>
        <div class="title delay3">I</div>
        <div class="title delay4">N</div>
        <div class="title delay5">O</div>        
        <div class="title delay7">.</div>
      </div>
    </div>  
    <div class="container">
        <h1 class="mt-4 text-center">Cadastro de Usuário</h1>
    </div>
    <div class="container">
                    
            <form method="POST" enctype="multipart/form-data" >
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome">
                </div>

                
                <div class="mb-3">
                    <label for="cpf" class="form-label">CPF</label>
                    <input type="text" class="form-control" id="cpf" name="cpf">
                </div>


                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                
                <div class="mb-3">
                    
                <a href="index.php">
                <button type="reset" class="btn btn-danger">Cancelar</button>
                </a>
                <button type="submit" name="cadastrar" class="btn btn-primary">Cadastrar</button>
                <a href="listar_usuarios.php">
                <button type="button" class="btn btn-success">Listar</button>
                </a>
                <a href="index_cadusuarios.php">
                <button type="button" class="btn btn-success">Cadastrar Usúarios</button>
                </a>
                </div>
                </form>
            </form>
    </div>
</body>
</html>