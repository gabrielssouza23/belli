<?php
namespace Source\App\Api;

use Source\Core\Connect;

class Medicamentos extends Api
{
    public function __construct()
    {
        parent::__construct();
    }

    // Inserir um novo medicamento
    public function insert(array $data): void
    {
        $sql = "INSERT INTO medicamentos (nome, tarja, quantidade, descricao) 
                VALUES (:nome, :tarja, :quantidade, :descricao)";

        $stmt = Connect::getInstance()->prepare($sql);
        $stmt->bindParam(":nome", $data["nome"]);
        $stmt->bindParam(":tarja", $data["tarja"]);
        $stmt->bindParam(":quantidade", $data["quantidade"]);
        $stmt->bindParam(":descricao", $data["descricao"]);

        if ($stmt->execute()) {
            $this->back([
                "type" => "success",
                "message" => "Medicamento cadastrado com sucesso"
            ]);
        } else {
            $this->back([
                "type" => "error",
                "message" => "Erro ao cadastrar medicamento"
            ]);
        }
    }

    // Listar todos os medicamentos
    public function getAll(): void
    {
        $sql = "SELECT * FROM medicamentos";
        $stmt = Connect::getInstance()->query($sql);
        $medicamentos = $stmt->fetchAll();

        if ($medicamentos) {
            $this->back([
                "type" => "success",
                "medicamentos" => $medicamentos
            ]);
        } else {
            $this->back([
                "type" => "error",
                "message" => "Nenhum medicamento encontrado"
            ]);
        }
    }

    // Listar medicamentos de um determinado usuário
    public function getByUser(): void
    {
        // Obtém os dados da requisição
        $data = json_decode(file_get_contents("php://input"), true);
    
        // Verifica se o id_usuario foi passado e é um inteiro
        if (isset($data['id_usuario']) && is_int($data['id_usuario'])) {
            $usuarioId = (int)$data['id_usuario']; // Garante que seja um inteiro
    
            $sql = "SELECT * FROM medicamentoscomusuario mu join medicamentos m on mu.usuarioId = m.id WHERE mu.usuarioId = :id_usuario";
            $stmt = Connect::getInstance()->prepare($sql);
            $stmt->bindParam(":id_usuario", $usuarioId);
            $stmt->execute();
            $medicamentos = $stmt->fetchAll();
    
            if ($medicamentos) {
                $this->back([
                    "type" => "success",
                    "medicamentos" => $medicamentos
                ]);
            } else {
                $this->back([
                    "type" => "error",
                    "message" => "Nenhum medicamento encontrado para este usuário"
                ]);
            }
        } else {
            $this->back([
                "type" => "error",
                "message" => "ID do usuário inválido"
            ]);
        }
    }
    

}
