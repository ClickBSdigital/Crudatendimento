<body>
    
    <div class="p-5 bg-dark text-white">
        <h1>Sistema do Eliandro</h1>
    
      
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
