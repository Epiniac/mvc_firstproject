<?php
class Controller {
  private $model;

  public function __construct($model) {
    $this->model = $model;
  }

  public function viewMolecules() {
    $molecules = $this->model->read();
    require 'views/molecules.php';
  }

  public function viewMolecule() {$id = isset($_GET['id']) ? $_GET['id'] : 0;
    $molecule = $this->model->readOne($id);
    require 'views/molecule.php';
  }

  public function createMolecule() {
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $formula = isset($_POST['formula']) ? $_POST['formula'] : '';
    $this->model->create($name, $formula);
    header('Location: ?action=viewMolecules');
  }

  public function updateMolecule() {
    $id = isset($_GET['id']) ? $_GET['id'] : 0;
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $formula = isset($_POST['formula']) ? $_POST['formula'] : '';
    $this->model->update($id, $name, $formula);
    header('Location: ?action=viewMolecules');
  }

  public function deleteMolecule() {
    $id = isset($_GET['id']) ? $_GET['id'] : 0;
    $this->model->delete($id);
    header('Location: ?action=viewMolecules');
  }
}