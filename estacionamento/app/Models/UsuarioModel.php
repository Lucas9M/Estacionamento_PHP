<?php

class UsuarioModel
{
    private $db;

    public function __construct($database)
    {
        $this->db = $database;
    }

    public function createUser($username, $password, $email, $role)
    {
        $hash = password_hash($password, PASSWORD_BCRYPT);
        $stmt = $this->db->prepare("INSERT INTO Usuario (username, password, email, role) VALUES (?, ?, ?, ?)");
        return $stmt->execute([$username, $hash, $email, $role]);
    }

    public function getUserByEmail($email)
    {
        $stmt = $this->db->prepare("SELECT * FROM Usuario WHERE email = ?");
        $stmt->execute([$email]);
        return $stmt->fetch();
    }

    public function getUserById($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM Usuario WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function updateUser($id, $username, $email, $role)
    {
        $stmt = $this->db->prepare("UPDATE Usuario SET username = ?, email = ?, role = ? WHERE id = ?");
        return $stmt->execute([$username, $email, $role, $id]);
    }

    public function deleteUser($id)
    {
        $stmt = $this->db->prepare("DELETE FROM Usuario WHERE id = ?");
        return $stmt->execute([$id]);
    }

    public function getAllUsers()
    {
        $stmt = $this->db->prepare("SELECT * FROM Usuario");
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
