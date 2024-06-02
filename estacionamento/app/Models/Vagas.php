<?php
class Vagas
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function getAll()
    {
        $stmt = $this->pdo->query("SELECT * FROM Vagas");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM Vagas WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($idAndar, $quantidadeTotal, $quantidadeOcupada, $quantidadeDisponivel)
    {
        $stmt = $this->pdo->prepare("INSERT INTO Vagas (idAndar, quantidadeTotal, quantidadeOcupada, quantidadeDisponivel) VALUES (?, ?, ?, ?)");
        return $stmt->execute([$idAndar, $quantidadeTotal, $quantidadeOcupada, $quantidadeDisponivel]);
    }

    public function update($id, $idAndar, $quantidadeTotal, $quantidadeOcupada, $quantidadeDisponivel)
    {
        $stmt = $this->pdo->prepare("UPDATE Vagas SET idAndar = ?, quantidadeTotal = ?, quantidadeOcupada = ?, quantidadeDisponivel = ? WHERE id = ?");
        return $stmt->execute([$idAndar, $quantidadeTotal, $quantidadeOcupada, $quantidadeDisponivel, $id]);
    }

    public function delete($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM Vagas WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
