<?php
class Estacionamento
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function getAll()
    {
        $stmt = $this->pdo->query("SELECT * FROM Estacionamento");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM Estacionamento WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($nome, $endereco, $CNPJ, $precoHora, $admin_id)
    {
        $stmt = $this->pdo->prepare("INSERT INTO Estacionamento (nome, endereco, CNPJ, precoHora, admin_id) VALUES (?, ?, ?, ?, ?)");
        return $stmt->execute([$nome, $endereco, $CNPJ, $precoHora, $admin_id]);
    }

    public function update($id, $nome, $endereco, $CNPJ, $precoHora, $admin_id)
    {
        $stmt = $this->pdo->prepare("UPDATE Estacionamento SET nome = ?, endereco = ?, CNPJ = ?, precoHora = ?, admin_id = ? WHERE id = ?");
        return $stmt->execute([$nome, $endereco, $CNPJ, $precoHora, $admin_id, $id]);
    }

    public function delete($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM Estacionamento WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
