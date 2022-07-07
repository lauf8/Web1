<?php

require_once '../Model/Usuario.php';

/**
 * Salvar como Alunos.php
 * herda da classe crudAlunos
 * contem metodos basicos para criar, deletar, Lê e apagar dados no BD
 */
class UsuarioController extends Usuario {
    
    protected $tabela = 'autor';  //define a tabela do banco

    //  busca 1 item
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
        $sql = "INSERT INTO $this->tabela (nome, cpf,telefone,endereco,email) VALUES (:nome, :nacionalidade,:telefone,:endereco,:email)";
        $stm = Database::prepare($sql);
        $stm->bindParam(':nome', $this->nome);
        $stm->bindParam(':cpf', $this->cpf);
        $stm->bindParam(':telefone', $this->telefone);
        $stm->bindParam(':endereco', $this->endereco);
        $stm->bindParam(':email', $this->email);
        return $stm->execute();
    }
    
    // update de itens
    public function update($id) {
        $sql = "UPDATE $this->tabela SET nome = :nome, cpf = :cpf, telefone = :telefone, endereco = :endereco, email = :email WHERE id = :id";
        $stm = Database::prepare($sql);
        $stm->bindParam(':id', $id, \PDO::PARAM_INT);
        $stm->bindParam(':nome', $this->nome);
        $stm->bindParam(':nacionalidade', $this->nacionalidade);
        $stm->bindParam(':telefone', $this->telefone);
        $stm->bindParam(':endereco', $this->endereco);
        $stm->bindParam(':email', $this->email);
        return $stm->execute();
    }
    
    // deleta 1 item
    public function delete($id) {
        $sql = "DELETE FROM $this->tabela WHERE id = :id";
        $stm = Database::prepare($sql);
        $stm->bindParam(':id', $id, \PDO::PARAM_INT);
        return $stm->execute();
    }
    
}
