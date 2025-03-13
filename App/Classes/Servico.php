<?php

require './App/DB/Database.php';

class Servico{

    private $pdo;
    private $table_name = "servicos";

    public int $id_servico;
    public string $nome_servico;
    public string $descricao;
    

    public function cadastrar(){
        try {
            $sql_code = "INSERT INTO " . $this->table_name . " (nome_servico, descricao) VALUES (:nome_servico, :descricao)";
            $stmt = $this->pdo->prepare($sql_code);
            $stmt->bindParam(":nome_servico", $this->nome);
            $stmt->bindParam(":descricao", $this->nome);
    
            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Erro ao cadastrar: " . $e->getMessage();
            return false;
        }
    }

    public function buscar($where = null, $order = null, $limit = null) {
        $res = $this->pdo->select($where, $order, $limit)->fetchAll(PDO::FETCH_CLASS, self::class);
        return $res;
    }

    public function buscar_por_id($id_servico) {
        $obj = $this->pdo->select('id_servico = ' . $id_servico)->fetchObject(self::class);
        return $obj;
    }
}