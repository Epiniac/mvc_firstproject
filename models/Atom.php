<?php
class Atom {
  private $connect;

  public $id;
  public $name;
  public $symbol;
  public $atomic_number;
  public $atomic_mass;

  public function __construct($db) {
    $this->connect = $db;
  }

  public function create() {
    $query = "INSERT INTO atome (name, symbol, atomic_number, atomic_mass) VALUES (?, ?, ?, ?)";
    $element = $this->connect->prepare($query);
    $element->bindParam(1, $this->name);
    $element->bindParam(2, $this->symbol);
    $element->bindParam(3, $this->atomic_number);
    $element->bindParam(4, $this->atomic_mass);
    $element->execute();
    return $this->connect->lastInsertId();
  }

  public function readAll() {
    $query = "SELECT * FROM atome";
    $element = $this->connect->prepare($query);
    $element->execute();
    return $element;
  }

  public function readOneById() {
    $query = "SELECT * FROM atome WHERE id = ?";
    $element = $this->connect->prepare($query);
    $element->bindParam(1, $this->id);
    $element->execute();
    return $element;
  }

  public function update() {
    $query = "UPDATE atome SET name = ?, symbol = ?, atomic_number = ?, atomic_mass = ? WHERE id = ?";
    $element = $this->connect->prepare($query);
    $element->bindParam(1, $this->name);
    $element->bindParam(2, $this->symbol);
    $element->bindParam(3, $this->atomic_number);
    $element->bindParam(4, $this->atomic_mass);
    $element->bindParam(5, $this->id);
    $element->execute();
  }

  public function delete() {
    $query = "DELETE FROM atome WHERE id = ?";
    $element = $this->connect->prepare($query);
    $element->bindParam(1, $this->id);
    $element->execute();
  }
}