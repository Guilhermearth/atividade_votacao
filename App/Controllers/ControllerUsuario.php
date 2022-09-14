<?php

require_once('app/Database/ConexaoDB.php');

class ControllerUsuario
{
    public function createVotacao(Usuario $votacao){
        try{
            $insertVotacao = "INSERT INTO votacao (nome, cpf, idade, voto) VALUES (:nome, :cpf, :idade, :voto)";
            $stmt = ConexaoDB::getConn()->prepare($insertVotacao);
            $stmt->bindValue(':nome', $votacao->getNome());
            $stmt->bindValue(':cpf', $votacao->getcpf());
            $stmt->bindValue(':idade', $votacao->getIdade());
            $stmt->bindValue(':voto', $votacao->getvoto());
            $stmt->execute();
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public function readVotacao(){
        try{
            $queryVotacao = "SELECT * FROM votacao";
            $stmt = ConexaoDB::getConn()->prepare($queryVotacao);
            $stmt->execute();

            if($stmt->rowCount()){
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            }
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public function updateUsuario(Usuario $votacao){

    }

    public function deleteUsuario(int $id){

    }

}

?>