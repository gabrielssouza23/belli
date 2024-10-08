<?php
namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

use Source\Core\Connect;
use Source\Core\Model;

class Medicamento extends Model
{
    public function __construct()
    {
        parent::__construct("medicamentos", ["nome", "tarja", "quantidade", "descricao"]);
    }

    public function getByUser(int $userId)
    {
        $query = "SELECT * FROM medicamentos WHERE id_usuario = :id_usuario";
        $conn = Connect::getInstance();
        $stmt = $conn->prepare($query);
        $stmt->bindParam("id_usuario", $userId);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getAll()
    {
        $query = "SELECT * FROM medicamentos";
        $conn = Connect::getInstance();
        $stmt = $conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function insertMedicamento(array $data)
    {
        $sql = "INSERT INTO medicamentos (nome, tarja, quantidade, descricao, id_usuario) 
                VALUES (:nome, :tarja, :quantidade, :descricao, :id_usuario)";

        $stmt = Connect::getInstance()->prepare($sql);
        $stmt->bindParam(":nome", $data["nome"]);
        $stmt->bindParam(":tarja", $data["tarja"]);
        $stmt->bindParam(":quantidade", $data["quantidade"]);
        $stmt->bindParam(":descricao", $data["descricao"]);

        if ($stmt->execute()) {
            return [
                "type" => "success",
                "message" => "Medicamento cadastrado com sucesso"
            ];
        } else {
            return [
                "type" => "error",
                "message" => "Erro ao cadastrar medicamento"
            ];
        }
    }
}
