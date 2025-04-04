<?php
require './App/Classes/Usuario.php';
//$objUser = new Usuario();
// print_r($_POST);
$objUser = new Usuario();
$dados = $objUser->buscar();
//echo 'DADOS: ';
//print_r($dados);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <title>Usuarios Cadastrados</title>
    <style>
      #foto_user{
        width:20%;
        border-radius:50%;
      }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar- bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Sistema do Eliandro</a>
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
        <h1>Usuários</h1>
    
      </div>
    <div class="container">
        <h1 class="mt-4 text-center">Listar de Usuarios</h1>
    </div>
    <div class="container">
                   
              <table class="table table-striped">
                  <thead>
                    <tr>
                    
                      <th scope="col">Nome</th>
                      <th scope="col">CPF</th>
                      <th scope="col">Email</th>                  
                      <th scope="col">Editar</th>
                      <th scope="col">Excluir</th>
                    </tr>
                  </thead>
                  <tbody>

                  <?php if ($dados && count($dados) > 0): ?>
                    <?php foreach ($dados as $usuario): ?>
                        <tr>
                            <th scope="row"><?= htmlspecialchars($usuario->id_usuario) ?></th>                            
                            <td><?= htmlspecialchars($usuario->nome_usuario) ?></td>
                            <td><?= htmlspecialchars($usuario->cpf) ?></td>
                            <td><?= htmlspecialchars($usuario->email) ?></td>                           
                            <td><a href="./editar_usuario.php?id_user=<?= htmlspecialchars($usuario->id_usuario) ?>" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a></td>
                            <td><a href="./excluir_usuario.php?id_user=<?= htmlspecialchars($usuario->id_usuario) ?>" class="btn btn-danger"><i class="bi bi-trash3"></i></a></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="8" class="text-center">Nenhum usuário encontrado.</td>
                    </tr>
                <?php endif; ?>
                  </tbody>
                </table>
           
    </div>
</body>
</html>