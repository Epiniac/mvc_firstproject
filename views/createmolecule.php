<?php include __DIR__ . '/header.php' ?>
<form action="?action=createMolecule" method="post">
  <div class="display-form">
  <label for="nom">Nom: </label>
  <input type="text" name="nom" id="nom" required>
  <br>
  <label for="formule">Formule: </label>
  <input type="text" name="formule" id="formule" required>
  <br>
  <input type="submit" name="submit" value="Créer">
  </div>
</form>