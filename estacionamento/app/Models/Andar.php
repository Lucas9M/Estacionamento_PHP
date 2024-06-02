<?php
class Andar
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function getAll()
    {
        $stmt = $this->pdo->query("SELECT * FROM Andar");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM Andar WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($idEstacionamento, $nomeSetor)
    {
        $stmt = $this->pdo->prepare("INSERT INTO Andar (idEstacionamento, nomeSetor) VALUES (?, ?)");
        return $stmt->execute([$idEstacionamento, $nomeSetor]);
    }

    public function update($id, $idEstacionamento, $nomeSetor)
    {
        $stmt = $this->pdo->prepare("UPDATE Andar SET idEstacionamento = ?, nomeSetor = ? WHERE id = ?");
        return $stmt->execute([$idEstacionamento, $nomeSetor, $id]);
    }

    public function delete($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM Andar WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
