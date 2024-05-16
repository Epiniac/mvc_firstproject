<?php
#URL : http://localhost/php_mvc/index.php?action=viewMolecules

session_start();

require_once __DIR__ . '/controllers/Controller.php';
$db = new PDO('mysql:host=localhost;dbname=chimie', 'root', '');
require_once __DIR__ . '/models/Molecule.php';

$moleculeModel = new Molecule($db);

$moleculeController = new Controller($moleculeModel);

$action = isset($_GET['action']) ? $_GET['action'] : 'viewMolecules';
try{
  switch ($action) {
    case 'viewMolecules':
      $moleculeController->viewMolecules();
      break;
    case 'viewMolecule':
      $moleculeController->viewMolecule();
      break;
    case 'createMolecule':
      $moleculeController->createMolecule();
      break;
    case 'updateMolecule':
      $moleculeController->updateMolecule();
      break;
    case 'deleteMolecule':
      $moleculeController->deleteMolecule();
      break;
    default:
      header('Location: ?action=viewMolecules');
  }
} catch (Exception $e) {
  include __DIR__ . '/views/errors/500.php';
}
