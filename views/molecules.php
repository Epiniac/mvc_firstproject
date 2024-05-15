<?php include __DIR__ . '/header.php' ?>
<?php foreach ($molecules as $molecule): ?>
  <div class="display">
    <h3>Nom: <?php echo $molecule['nom']; ?></h3>
    <h3>Formule: <?php echo $molecule['formule']; ?></p></h3>
    <!-- Les molécules sont affichées avec leur id dans l'url --> 
  </div>
  <div class="display">
    <a href="?action=viewMolecule&id=<?php echo $molecule['id']; ?>">Voir détail</a>
    <a href="?action=updateMolecule&id=<?php echo $molecule['id']; ?>">Modifier</a>
    <a href="?action=deleteMolecule&id=<?php echo $molecule['id']; ?>">Supprimer</a>
  </div>
  <hr>
<?php endforeach; ?>
