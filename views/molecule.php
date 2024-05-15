<?php include __DIR__ . '/header.php' ?>
<?php if (is_array($molecule)):?>
  <h1>Nom: <?php echo $molecule['nom'];?></h1>
  <h2>Formule: <?php echo $molecule['formule'];?></h2>
<?php else:?>
  <p>Erreur: Impossible de charger les données de la molécule</p>
<?php endif;?>
<a href="?action=updateMolecule&id=<?php echo $molecule['id']; ?>">Modifier</a>
<a href="?action=deleteMolecule&id=<?php echo $molecule['id']; ?>">Supprimer</a>