<h2><?php echo $molecule['name']; ?></h2>
<p><?php echo $molecule['formula']; ?></p>
<a href="?action=editMolecule&id=<?php echo $molecule['id']; ?>">Modifier</a>
<a href="?action=deleteMolecule&id=<?php echo $molecule['id']; ?>">Supprimer</a>