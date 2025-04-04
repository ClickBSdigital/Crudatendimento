<?php

require './App/Classes/Usuario.php';

if(isset($_GET['id_user'])){ //existe algo vindo  via get?

    $fdp = $_GET['id_user'];
    $objUser = new Usuario();
    $user_edit = $objUser->buscar_por_id($fdp);
}


if(isset($_POST['editar'])){ // existe algo vindo via post com a chave editar é o botao submit

    $nome_usuario = $_POST['nome_usuario'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];

    $user_edit->nome_usuario = $nome_usuario;
    $user_edit->cpf = $cpf;    
    $user_edit->email = $email;
   
  
    //print_r($objUser);
    $res = $user_edit->atualizar();
    if($res){
        header('location:./listar.php');
    }else{
      echo '<script> alert("Erro ao cadastrar!!") </script> ';
    }
  }
  

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Sys CAD</title>
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
        <h1 class="mt-4 text-center">Editar Usuário</h1>
    </div>
    <div class="container">
                    
            <form method="POST" enctype="multipart/form-data" >
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome_usuario" name="nome_usuario" value="<?php echo $user_edit->nome_usuario; ?>" >
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $user_edit->email; ?>" >
                </div>

                <div class="mb-3">
                    <label for="cpf" class="form-label">CPF</label>
                    <input type="text" class="form-control" id="cpf" name="cpf" value="<?php echo $user_edit->cpf; ?>" >
                </div>

                               
                </div>
                <button type="reset" class="btn btn-danger">Cancelar</button>
                <button type="submit" name="editar" class="btn btn-primary">Salvar</button>
                </form>
            </form>
    </div>
</body>
</html>