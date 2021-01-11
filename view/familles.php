<!DOCTYPE html>
    <head>
        <title>Consulter</title>
        <link rel="stylesheet" href="consulter.css">
        <meta charset="UTF-8">
    </head>
    <body>
        <div class="formulaire">
            <h1>Ajouter une famille : </h1>
            <form action="routeurFamilles.php?action=addFamille" method="post">
                <label for="id">Id : </label>
                <input id="id" name="id" type="text">
                <label for="libelle">Libellé : </label>
                <input id="libelle" name="libelle" type="text">
                <input type="submit" value="Ajouter">
            </form>
            <h1>Modifier une famille : </h1>
            <form action="?action=updateFamille" method="post">
                <label for="oldId">Id de la famille à modifier : </label>
                <input class="text" id="oldId" name="oldId" type="text">
                <label for="newId">Modifier id : </label>
                <input class="text" id="newId" name="newId" type="text"><br>
                <label for="libelle">Modifier libellé : </label>
                <input class="text" id="libelle" name="libelle" type="text">
                <input class="btn" type="submit" value="Modifier">
            </form>
            <h1>Supprimer une famille : </h1>
            <form action="?action=deleteFamille" method="post">
                <label for="id">Id : </label>
                <input class="text" id="id" name="id" type="text">
                <input class="btn" type="submit" value="Supprimer">
            </form>
        </div>
        <h1>Liste des familles de médicaments</h1>
        <?php
            while($donnees = $lesfam->fetch())
            {
                echo '<a href=routeurMedicaments.php?idFamille=' .$donnees['id']. '><h3>' . $donnees['id'] . ' : </h3></a><p>' . $donnees['libelle'] . '</p>';
            }
        ?>
    </body>
</html>