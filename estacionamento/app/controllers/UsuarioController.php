<?php

session_start();

class UsuarioController
{
    private $usuarioModel;

    public function __construct($usuarioModel)
    {
        $this->usuarioModel = $usuarioModel;
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $user = $this->usuarioModel->getUserByEmail($email);

            if ($user && password_verify($password, $user['password'])) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['role'] = $user['role'];

                setcookie('email', $email, time() + (86400 * 30), "/");

                header('Location: /');
            } else {
                echo "Invalid credentials";
            }
        } else {
            include '/xamp/htdocs/estacionamento/app/views/users/login.php';
        }
    }

    public function logout()
    {
        session_destroy();
        setcookie('email', '', time() - 3600, "/");
        header('Location: /');
    }

    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $role = $_POST['role'];

            $this->usuarioModel->createUser($username, $password, $email, $role);
            header('Location: ?controller=usuario&action=login');
        } else {
            include '../app/views/users/register.php';
        }
    }

    public function listUsers()
    {
        $users = $this->usuarioModel->getAllUsers();
        include 'views/list_users.php';
    }

    public function editUser()
    {
        if ($_SESSION['role'] !== 'admin') {
            echo "Access denied";
            exit;
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_POST['id'];
            $username = $_POST['username'];
            $email = $_POST['email'];
            $role = $_POST['role'];

            $this->usuarioModel->updateUser($id, $username, $email, $role);
            header('Location: /list_users');
        } else {
            $id = $_GET['id'];
            $user = $this->usuarioModel->getUserById($id);
            include 'views/edit_user.php';
        }
    }

    public function deleteUser()
    {
        if ($_SESSION['role'] !== 'admin') {
            echo "Access denied";
            exit;
        }

        $id = $_GET['id'];
        $this->usuarioModel->deleteUser($id);
        header('Location: /list_users');
    }
}
