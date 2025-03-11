
<?php

require './App/DB/Database.php';

class Usuario {
    public int $id_usuario;
    public string $nome_usuario;
    public string $cpf;
    public string $email;

    // Construtor para inicializar as propriedades
    public function __construct(string $nome_usuario = '', string $cpf = '', string $email = '') {
        $this->nome_usuario = $nome_usuario;
        $this->cpf = $cpf;
        $this->email = $email;
    }

    public function cadastrar() {
        $db = new Database('usuario');
        $res = $db->insert(
            [
                'nome_usuario' => $this->nome_usuario,
                'cpf' => $this->cpf,
                'email' => $this->email,
            ]
        );
        return $res;
    }

    public function buscar($where=null,$order=null,$limit=null){
        $db = new Database('usuario');
        $res = $db->select($where,$order,$limit)->fetchAll(PDO::FETCH_CLASS,self::class);
        return $res;
    }


    public function buscar_por_id($id_usuario) {
        $db = new Database('usuario');
        // Usando prepared statement para evitar injeção de SQL
        $stmt = $db->prepare('SELECT * FROM usuario WHERE id_usuario = :id_usuario');
        $stmt->bindParam(':id_usuario', $id_usuario, PDO::PARAM_INT);
        $stmt->execute();
        $obj = $stmt->fetchObject(self::class);
        return $obj; // Retorna um objeto da CLASSE USUARIO
    }
}