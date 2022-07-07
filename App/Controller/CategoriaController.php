<?php

require_once '../Model/Categoria.php';

/**
 * Salvar como Alunos.php
 * herda da classe crudAlunos
 * contem metodos basicos para criar, deletar, Lê e apagar dados no BD
 */
class CategoriaController extends Categoria 
{
    
    protected $tabela = 'categoria';  //define a tabela do banco

    // busca 1 item
    public function findUnit($id) {
        $sql = "SELECT * FROM $this->tabela WHERE id = :id";
        $stm = Database::prepare($sql);
        $stm->bindParam(':id', $id, \PDO::PARAM_INT);
        $stm->execute();
        return $stm->fetch();
    }

    // busca todos os itens
    public function findAll() {
        $sql = "SELECT * FROM $this->tabela";
        $stm = Database::prepare($sql);
        $stm->execute();
        return $stm->fetchAll();
    }
    
    // faz insert   
    public function insert() {
        $sql = "INSERT INTO $this->tabela (nome, setor) VALUES (:nome, :setor)";
        $stm = Database::prepare($sql);
        $stm->bindParam(':nome', $this->nome);
        $stm->bindParam(':setor', $this->setor);
        return $stm->execute();
    }
    
    // update de itens
    public function update($id) {
        $sql = "UPDATE $this->tabela SET nome = :nome, setor = :setor WHERE id = :id";
        $stm = Database::prepare($sql);
        $stm->bindParam(':id', $id, \PDO::PARAM_INT);
        $stm->bindParam(':nome', $this->nome);
        $stm->bindParam(':setor', $this->setor);
        return $stm->execute();
    }
    
    // deleta  1 item
    public function delete($id) {
        $sql = "DELETE FROM $this->tabela WHERE id = :id";
        $stm = Database::prepare($sql);
        $stm->bindParam(':id', $id, \PDO::PARAM_INT);
        return $stm->execute();
    }
    
}
