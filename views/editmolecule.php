
<form action="?action=updateMolecule&id=<?php echo $molecule['id']; ?>" method="post">
  <label for="name">Nouveau nom de la molécule: </label>
  <input type="text" name="name" id="name" value="<?php echo $molecule['name']; ?>" required>

  <label for="formula">Nouvelle formule chimique: </label>
  <input type="text" name="formula" id="formula" value="<?php echo $molecule['formula']; ?>" required>

  <input type="submit" value="Update">
</form>