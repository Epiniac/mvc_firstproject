<?php include __DIR__ . '/header.php' ?>
<?php foreach ($molecules as $molecule): ?>
  <div>
    <h1><?php echo $molecule['nom']; ?></h1>
    <p><?php echo $molecule['formule']; ?></p>
    <!-- Les molécules sont affichées avec leur id dans l'url --> 
    <a href="?action=viewMolecule&id=<?php echo $molecule['id']; ?>">Void détail</a>
    <a href="?action=updateMolecule&id=<?php echo $molecule['id']; ?>">Modifier</a>
    <a href="?action=deleteMolecule&id=<?php echo $molecule['id']; ?>">Supprimer</a>
  </div>
<?php endforeach; ?>
