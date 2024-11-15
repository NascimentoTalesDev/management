<?php
session_start();
include_once("connection.php");
include_once("url.php");

$data = $_POST;

// MODIFICAÇÕES NO BANCO
if (!empty($data)) {
    $type = isset($data["type"]) ? $data["type"] : '';

    if ($type === "create") {
        $name = trim($data["name"] ?? '');
        $phone = trim($data["phone"] ?? '');
        $observations = trim($data["observations"] ?? '');

        if (!empty($name) && !empty($phone)) {
            $query = "INSERT INTO contacts (name, phone, observations) VALUES (:name, :phone, :observations)";
            $stmt = $conn->prepare($query);
            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":phone", $phone);
            $stmt->bindParam(":observations", $observations);
            try {
                $stmt->execute();
                $_SESSION["msg"] = "Contato criado com sucesso!";
            } catch (PDOException $e) {
                echo "Erro: " . $e->getMessage();
            }
        } else {
            $_SESSION["msg"] = "Nome e telefone são obrigatórios!";
        }
    } elseif ($type === "edit") {
        $id = $data["id"] ?? null;
        $name = trim($data["name"] ?? '');
        $phone = trim($data["phone"] ?? '');
        $observations = trim($data["observations"] ?? '');

        if ($id && !empty($name) && !empty($phone)) {
            $query = "UPDATE contacts SET name = :name, phone = :phone, observations = :observations WHERE id = :id";
            $stmt = $conn->prepare($query);
            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":phone", $phone);
            $stmt->bindParam(":observations", $observations);
            $stmt->bindParam(":id", $id);
            try {
                $stmt->execute();
                $_SESSION["msg"] = "Contato atualizado com sucesso!";
            } catch (PDOException $e) {
                echo "Erro: " . $e->getMessage();
            }
        }
    } elseif ($type === "delete") {
        $id = $data["id"] ?? null;
        if ($id) {
            $query = "DELETE FROM contacts WHERE id = :id";
            $stmt = $conn->prepare($query);
            $stmt->bindParam(":id", $id);
            try {
                $stmt->execute();
                $_SESSION["msg"] = "Contato removido com sucesso!";
            } catch (PDOException $e) {
                echo "Erro: " . $e->getMessage();
            }
        }
    }
    header("Location:" . $BASE_URL . "../index.php");
    exit;
} else {
    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
    if ($id) {
        $query = "SELECT * FROM contacts WHERE id = :id";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $contact = $stmt->fetch();
    } else {
        $query = "SELECT * FROM contacts";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $contacts = $stmt->fetchAll();
    }
}
$conn = null;
