<?php

require './App/Classes/Usuario.php';
//$objUser = new Usuario();
// print_r($_POST);

if(isset($_POST['cadastrar'])){

  $nome_usuario = $_POST['nome_usuario'];
  $cpf = $_POST['cpf'];
  $email = $_POST['email'];

  $objProd = new Usuario ();
  $objUser->nome_usuario = $nome_usuario;
  $objUser->cpf = $cpf;
  $objUser->email = $email;

  print_r($_POST);
  print_r($objUser);
  $res = $objUser->cadastrar();
  if($res){
    echo '<script> alert("Cadastrado com sucesso!!") </script> ';
  }else{
    echo '<script> alert("Erro ao cadastrar!!") </script> ';
  }
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Sistema Eliandro</title>
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
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Sobre</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Cadastro</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Contato</a>
              </li>
          
            </ul>
          </div>
        </div>
      </nav>
    <div class="p-5 bg-dark text-white">
    <h1>Sistema do Eliandro</h1>
    
      </div>
    <div class="container">
        <h1 class="mt-4 text-center">Cadastro de Usuários</h1>
    </div>
    <div class="container">
                    
            <form method="POST" enctype="multipart/form-data" >
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome do usuário</label>
                    <input type="text" class="form-control" id="nome" name="nome" require>
                </div>

                <div class="mb-3">
                    <label for="cpf" class="form-label">CPF</label>
                    <input type="text" class="form-control" id="cpf" name="cpf" require>
                </div>              
                
                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input class="form-control" name="email" id="email" name="email" require>
                </div>
                
                <button type="reset" class="btn btn-danger">Cancelar</button>
                <button type="submit" name="cadastrar" class="btn btn-primary">Cadastrar</button>
                <a href="listar_usuarios.php">
                <button type="button" class="btn btn-success">Listar Usuários</button>
                </a>
                
            </form>
    </div>
</body>
</html>