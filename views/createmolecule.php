<?php include __DIR__ . '/header.php' ?>
<form action="?action=createMolecule" method="post">
  <label for="nom">Nom de la molécule: </label>
  <input type="text" name="nom" id="nom" required>

  <label for="formule">Formule chimique: </label>
  <input type="text" name="formule" id="formule" required>

  <input type="submit" name="submit" value="Créer">
</form>