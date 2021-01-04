<!DOCTYPE html>
    <head>
        <title>Consulter</title>
        <link rel="stylesheet" href="consulter.css">
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>Liste des médicaments</h1>
        <?php
            while($donnees = $lesMedicaments->fetch())
            {
                echo '<p><strong>' . $donnees['id'] . '</strong> : ' . $donnees['nomCommercial'] . ' ' . $donnees['idFamille'] . ' ' . $donnees['composition'] . ' ' . $donnees['effets'] . ' ' . $donnees['contreIndications'] . ' </p>';
            }
        ?>
    </body>
</html>