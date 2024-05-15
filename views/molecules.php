
<?php
    foreach ($molecules as $molecule):
?>
  <div>
    <h1><?php echo $molecule['name']; ?></h1>
    <p><?php echo $molecule['formula']; ?></p>
    <!-- Les molécules sont affichées avec leur id dans l'url --> 
    <a href="?action=viewMolecule&id=<?php echo $molecule['id']; ?>">Void détail</a>
    <a href="?action=editMolecule&id=<?php echo $molecule['id']; ?>">Modifier</a>
    <a href="?action=deleteMolecule&id=<?php echo $molecule['id']; ?>">Supprimer</a>
  </div>
<?php endforeach; ?>