<?php
class Molecule {
  private $connect;

  public $id;
  public $nom;
  public $formule;

  public function __construct($db) {
    $this->connect = $db;
  }

  public function create() {
    $query = "INSERT INTO molecule (nom, formule) VALUES (?, ?)";
    $element = $this->connect->prepare($query);
    $element->bindParam(1, $this->nom);
    $element->bindParam(2, $this->formule);
    $element->execute();
    return $this->connect->lastInsertId();
  }

  public function readAll() {
    $query = "SELECT * FROM   molecule";
    $element = $this->connect->prepare($query);
    $element->execute();
    return $element->fetchAll();
  }

  public function readOneById($id) {
    $query = "SELECT * FROM molecule WHERE id = ?";
    $element = $this->connect->prepare($query);
    $element->bindParam(1, $id);
    $element->execute();
    return $element->fetch();
  }

  public function update($id,$nom,$formule) {
    $query = "UPDATE molecule SET nom = ?, formule = ? WHERE id = ?";
    $element = $this->connect->prepare($query);
    $element->bindParam(1, $nom);
    $element->bindParam(2, $formule);
    $element->bindParam(3, $id);
    $element->execute();
  }

  public function delete() {
    $query = "DELETE FROM molecule WHERE id = ?";
    $element = $this->connect->prepare($query);
    $element->bindParam(1, $this->id);
    $element->execute();
  }
}
