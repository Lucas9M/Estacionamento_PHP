<?php
class Router
{
    public static function route($uri)
    {
        // Verificar a rota e chamar o controlador apropriado
        switch ($uri) {
            case BASE_URL . '/auth':
                require_once 'app/controllers/AuthController.php';
                $controller = new AuthController();
                break;
            case BASE_URL . '/estacionamento':
                require_once 'app/controllers/EstacionamentoController.php';
                $controller = new EstacionamentoController();
                break;
            case BASE_URL . '/andar':
                require_once 'app/controllers/AndarController.php';
                $controller = new AndarController();
                break;
            case BASE_URL . '/vaga':
                require_once 'app/controllers/VagaController.php';
                $controller = new VagaController();
                break;
            default:
                // Se nenhuma rota corresponder, exibir página não encontrada
                http_response_code(404);
                echo "404 Not Found";
                exit; // Encerrar o script
        }

        // Chamar o método apropriado no controlador
        $method = $_SERVER['REQUEST_METHOD'];
        switch ($method) {
            case 'GET':
                $controller->index();
                break;
            case 'POST':
                $controller->store();
                break;
            case 'PUT':
                $controller->update();
                break;
            case 'DELETE':
                $controller->delete();
                break;
            default:
                // Método não suportado
                http_response_code(405);
                echo "Método não suportado!";
                break;
        }
    }
}
