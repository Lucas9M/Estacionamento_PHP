<?php
require_once '/xamp/htdocs/estacionamento/app/Models/Vagas.php';

class VagasController
{

    
    private $model;
    public $path = 'xamp/htdocs/estacionamento/';

    public function __construct($pdo)
    {
        $this->model = new Vagas($pdo);
    }

    public function index()
    {
        $items = $this->model->getAll();
        include '/xamp/htdocs/estacionamento/app/views/vagas/index.php';
        
    }

    public function show($id)
    {
        $item = $this->model->getById($id);
        include '/xamp/htdocs/estacionamento/app/views/vagas/show.php';
    }

    public function create($data)
    {
        $this->model->create($data['idAndar'], $data['quantidadeTotal'], $data['quantidadeOcupada'], $data['quantidadeDisponivel']);
        header('Location: ' . BASE_URL . '?controller=vagas&action=index');
    }

    public function update($id, $data)
    {
        $this->model->update($id, $data['idAndar'], $data['quantidadeTotal'], $data['quantidadeOcupada'], $data['quantidadeDisponivel']);
        header('Location: ' . BASE_URL . '?controller=vagas&action=index');
    }

    public function delete($id)
    {
        $this->model->delete($id);
        header('Location: ' . BASE_URL . '?controller=vagas&action=index');
    }
}
