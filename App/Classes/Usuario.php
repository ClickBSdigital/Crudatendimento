<?php

require './App/DB/Database.php';

class Usuario{

    public int $id_usuario;
    public string $nome_usuario;
    public string $cpf;
    public string $email;
    

    public function cadastrar(){
        
        $db = new Database('usuarios');
        $res = $db->insert(
                [
                    'nome' => $this->nome_usuario,
                    'cpf' => $this->cpf,
                    'email' => $this->email,
                    
                ]
            );
        return $res;
    }

    public function buscar($where=null,$order=null,$limit=null){
        $db = new Database('usuarios');
        $res = $db->select($where,$order,$limit)->fetchAll(PDO::FETCH_CLASS,self::class);
        return $res;
    }

    public function buscar_por_id($id_usuario){
        $db = new Database('usuarios');
        $obj = $db->select('id_usuario ='.$id_usuario)->fetchObject(self::class);
        return $obj; //retorna um objeto da CLASSE USUARIO!!!!
    }

    // public function atualizar(){
    //     $db = new Database('usuario');

    //     $res = $db->update('id_usuario ='.$this->id_usuario,
    //                         [
    //                             "nome" => $this->nome,
    //                             "cpf" => $this->cpf,
    //                             "email" => $this->email,
    //                             "senha" => $this->senha,
    //                             "foto" => $this->foto,
    //                             "id_perfil" => $this->id_perfil
    //                         ]
    //                     );

    //     return $res;
    // }

    // public function excluir(){
    //     $db = new Database('usuario');
    //     $res = $db->delete('id_usuario ='.$this->id_usuario);
    //     return $res;
    // }
}