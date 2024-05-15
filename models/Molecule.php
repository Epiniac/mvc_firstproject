<?php
class Molecule {
  private $connect;

  public $id;
  public $name;
  public $formula;

  public function __construct($db) {
    $this->connect = $db;
  }

  public function create() {
    $query = "INSERT INTO molecule (name, formula) VALUES (?, ?)";
    $element = $this->connect->prepare($query);
    $element->bindParam(1, $this->name);
    $element->bindParam(2, $this->formula);
    $element->execute();
    return $this->connect->lastInsertId();
  }

  public function readAll() {
    $query = "SELECT * FROM molecule";
    $element = $this->connect->prepare($query);
    $element->execute();
    return $element;
  }

  public function readOneById() {
    $query = "SELECT * FROM molecule WHERE id = ?";
    $element = $this->connect->prepare($query);
    $element->bindParam(1, $this->id);
    $element->execute();
    return $element;
  }

  public function update() {
    $query = "UPDATE molecule SET name = ?, formula = ? WHERE id = ?";
    $element = $this->connect->prepare($query);
    $element->bindParam(1, $this->name);
    $element->bindParam(2, $this->formula);
    $element->bindParam(3, $this->id);
    $element->execute();
  }

  public function delete() {
    $query = "DELETE FROM molecule WHERE id = ?";
    $element = $this->connect->prepare($query);
    $element->bindParam(1, $this->id);
    $element->execute();
  }
}
