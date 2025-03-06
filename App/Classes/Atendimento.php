<?php

require './App/DB/Database.php';
require './App/Classes/Servico.php';
require './App/Classes/Usuario.php';

class Atendimento {
    public int $id_atendimento;
    public string $descricao; // Descrição do atendimento
    public int $id_usuario; // ID do usuário
    public int $id_servico; // ID do serviço

    public function cadastrar() {
        // Inicializa a conexão com o banco de dados
        $db = new Database('atendimentos');

        // Insere os dados no banco de dados
        $res = $db->insert(
            [
                'descricao' => $this->descricao,
                'id_usuario' => $this->id_usuario,
                'id_servico' => $this->id_servico,
            ]
        );

        return $res;
    }

    public function buscar($where=null,$order=null,$limit=null){
        $db = new Database('servicos');
        $res = $db->select($where,$order,$limit)->fetchAll(PDO::FETCH_CLASS,self::class);
        return $res;
    }

    public function buscar_por_id($id_servico){
        $db = new Database('servicos');
        $obj = $db->select('id_servico ='.$id_servico)->fetchObject(self::class);
        return $obj; //retorna um objeto da CLASSE servicos!!!!
    }

    // public function atualizar(){
    //     $db = new Database('servicos');

    //     $res = $db->update('id_servicos ='.$this->id_servicos,
    //                         [
    //                             'nome' => $this->nome,
    //                             'descricao' => $this->descricao,
    //                             'preco' => $this->preco,
    //                             'quantidade_em_estoque' => $this->quantidade_em_estoque,
    //                             'foto' => $this->foto
    //                         ]
    //                     );

    //     return $res;
    // }

    // public function excluir(){
    //     $db = new Database('servicos');
    //     $res = $db->delete('id_servicos ='.$this->id_servicos);
    //     return $res;
    // }
}