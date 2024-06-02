<?php
require_once '/xamp/htdocs/estacionamento/app/Models/Andar.php';

class AndarController
{
    private $model;

    public function __construct($pdo)
    {
        $this->model = new Andar($pdo);
    }

    public function index()
    {
        $items = $this->model->getAll();
        include '/xamp/htdocs/estacionamento/app/views/andar/index.php';
    }

    public function show($id)
    {
        $item = $this->model->getById($id);
        include '/xamp/htdocs/estacionamento/app/views/andar/show.php';
    }

    public function create($data)
    {
        $this->model->create($data['idEstacionamento'], $data['nomeSetor']);
        header('Location: ' . BASE_URL . '?controller=andar&action=index');
    }

    public function update($id, $data)
    {
        $this->model->update($id, $data['idEstacionamento'], $data['nomeSetor']);
        header('Location: ' . BASE_URL . '?controller=andar&action=index');
    }

    public function delete($id)
    {
        $this->model->delete($id);
        header('Location: ' . BASE_URL . '?controller=andar&action=index');
    }
}
