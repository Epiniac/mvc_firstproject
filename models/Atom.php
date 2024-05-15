<?php
class Atom {
  private $connect;

  public $id;
  public $nom;
  public $symbole;
  public $numero;
  public $masse_atomique;

  public function __construct($db) {
    $this->connect = $db;
  }

  public function create() {
    $query = "INSERT INTO atome (nom, symbole, numero, masse_atomique) VALUES (?, ?, ?, ?)";
    $element = $this->connect->prepare($query);
    $element->bindParam(1, $this->nom);
    $element->bindParam(2, $this->symbole);
    $element->bindParam(3, $this->numero);
    $element->bindParam(4, $this->masse_atomique);
    $element->execute();
    return $this->connect->lastInsertId();
  }

  public function readAll() {
    $query = "SELECT * FROM atome";
    $element = $this->connect->prepare($query);
    $element->execute();
    return $element->fetchAll();
  }

  public function readOneById($id) {
    $query = "SELECT * FROM atome WHERE id = ?";
    $element = $this->connect->prepare($query);
    $element->bindParam(1, $id);
    $element->execute();
    return $element->fetch();
  }

  public function update() {
    $query = "UPDATE atome SET nom = ?, symbole = ?, numero = ?, masse_atomique = ? WHERE id = ?";
    $element = $this->connect->prepare($query);
    $element->bindParam(1, $this->nom);
    $element->bindParam(2, $this->symbole);
    $element->bindParam(3, $this->numero);
    $element->bindParam(4, $this->masse_atomique);
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