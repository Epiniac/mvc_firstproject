<?php include __DIR__ . '/header.php' ?>
<form action="?action=createMolecule" method="post">
  <label for="name">Nom de la molécule: </label>
  <input type="text" name="name" id="name" required>

  <label for="formula">Formule chimique: </label>
  <input type="text" name="formula" id="formula" required>

  <input type="submit" value="Create">
</form>