<?php
require_once '/xamp/htdocs/estacionamento/app/Models/Estacionamento.php';

class EstacionamentoController
{
    private $model;

    public function __construct($pdo)
    {
        $this->model = new Estacionamento($pdo);
    }

    public function index()
    {
        $items = $this->model->getAll();
        include '/xamp/htdocs/estacionamento/app/views/estacionamento/index.php';
    }

    public function show($id)
    {
        $item = $this->model->getById($id);
        include '/xamp/htdocs/estacionamento/app/views/estacionamento/show.php';
    }

    public function create($data)
    {
        $this->model->create($data['nome'], $data['endereco'], $data['CNPJ'], $data['precoHora'], $data['admin_id']);
        header('Location: ' . BASE_URL . '?controller=estacionamento&action=index');
    }

    public function update($id, $data)
    {
        $this->model->update($id, $data['nome'], $data['endereco'], $data['CNPJ'], $data['precoHora'], $data['admin_id']);
        header('Location: ' . BASE_URL . '?controller=estacionamento&action=index');
    }

    public function delete($id)
    {
        $this->model->delete($id);
        header('Location: ' . BASE_URL . '?controller=estacionamento&action=index');
    }
}
