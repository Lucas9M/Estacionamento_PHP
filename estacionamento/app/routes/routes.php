<?php
require_once '../app/config/database.php'; // Conexão com o banco de dados
require_once '../app/controllers/HomeController.php';
require_once '../app/controllers/EstacionamentoController.php';
require_once '../app/controllers/AndarController.php';
require_once '../app/controllers/VagasController.php';
require_once '../app/controllers/UsuarioController.php';
require_once '../app/models/UsuarioModel.php';

// Instanciando o modelo e o controlador de usuários
$usuarioModel = new UsuarioModel($pdo);
$usuarioController = new UsuarioController($usuarioModel);

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'home';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';
$id = isset($_GET['id']) ? $_GET['id'] : null;

switch ($controller) {
    case 'home':
        $homeController = new HomeController();
        if ($action == 'index') {
            $homeController->index();
        }
        break;
    case 'estacionamento':
        $estacionamentoController = new EstacionamentoController($pdo);
        if ($action == 'index') {
            $estacionamentoController->index();
        } elseif ($action == 'show' && $id) {
            $estacionamentoController->show($id);
        } elseif ($action == 'create') {
            $estacionamentoController->create($_POST);
        } elseif ($action == 'update' && $id) {
            $estacionamentoController->update($id, $_POST);
        } elseif ($action == 'delete' && $id) {
            $estacionamentoController->delete($id);
        }
        break;
    case 'andar':
        $andarController = new AndarController($pdo);
        if ($action == 'index') {
            $andarController->index();
        } elseif ($action == 'show' && $id) {
            $andarController->show($id);
        } elseif ($action == 'create') {
            $andarController->create($_POST);
        } elseif ($action == 'update' && $id) {
            $andarController->update($id, $_POST);
        } elseif ($action == 'delete' && $id) {
            $andarController->delete($id);
        }
        break;
    case 'vagas':
        $vagasController = new VagasController($pdo);
        if ($action == 'index') {
            $vagasController->index();
        } elseif ($action == 'show' && $id) {
            $vagasController->show($id);
        } elseif ($action == 'create') {
            $vagasController->create($_POST);
        } elseif ($action == 'update' && $id) {
            $vagasController->update($id, $_POST);
        } elseif ($action == 'delete' && $id) {
            $vagasController->delete($id);
        }
        break;
    case 'usuario':
        if ($action == 'login') {
            $usuarioController->login();
        } elseif ($action == 'logout') {
            $usuarioController->logout();
        } elseif ($action == 'register') {
            $usuarioController->register();
        } elseif ($action == 'list_users') {
            $usuarioController->listUsers();
        } elseif ($action == 'edit_user' && $id) {
            $usuarioController->editUser();
        } elseif ($action == 'delete_user' && $id) {
            $usuarioController->deleteUser();
        }
        break;
    default:
        $homeController = new HomeController();
        $homeController->index();
        break;
}
