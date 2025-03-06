<?php

require './App/DB/Database.php';

class Servicos{

    public int $id_servico;
    public string $nome;
    public string $descricao;
    

    public function cadastrar(){
        
        $db = new Database('servicos');
        $res = $db->insert(
                [
                    'nome' => $this->nome,
                    'descricao' => $this->descricao,
                    
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