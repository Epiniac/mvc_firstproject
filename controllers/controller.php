<?php
require_once __DIR__ . '/../models/Molecule.php';

class Controller {
  private $model;

  public function __construct($model) {
    $this->model = $model;
  }

  public function viewMolecules() {
    $molecules = $this->model->readAll();
    require 'views/molecules.php';
  }

  public function viewMolecule() {
    $id = isset($_GET['id']) && is_numeric($_GET['id'])? $_GET['id'] : 0;
    if ($id > 0) {
      $molecule = $this->model->readOneById($id);
      require 'views/molecule.php';
    } else {
      echo "Erreur: Cet id ne correspond à aucune molécule ";
    }
  }

  public function createMolecule() {
    if (isset($_POST['submit'])) {
      $nom = $_POST['nom'];
      $formule = $_POST['formule'];
      $this->model->create($nom, $formule);
      header('Location:?action=viewMolecules');
  } else {
      require 'views/createmolecule.php';
  }
  }

  public function updateMolecule() {
    if (isset($_POST['submit'])) {
        $id = $_GET['id'];
        $nom = $_POST['nom'];
        $formule = $_POST['formule'];
        $this->model->update($id, $nom, $formule);
        header('Location:?action=viewMolecule&id='. $id);
    } else {
        $id = isset($_GET['id'])? $_GET['id'] : 0;
        require 'views/updatemolecule.php';
    }
}

  public function deleteMolecule() {
    $id = isset($_GET['id']) ? $_GET['id'] : 0;
    $this->model->delete($id);
    header('Location: ?action=deleteMolecules');
  }
}