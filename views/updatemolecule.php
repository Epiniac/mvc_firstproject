<?php include __DIR__ . '/header.php' ?>
<form action="?action=updateMolecule&id=<?php echo $id;?>" method="post">
    <label for="nom">Nom:</label>
    <input type="text" name="nom" value="">
    <br>
    <label for="formule">Formule:</label>
    <input type="text" name="formule" value="">
    <br>
    <input type="submit" name="submit" value="Update">
</form>