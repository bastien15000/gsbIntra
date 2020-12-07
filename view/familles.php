<!DOCTYPE html>
    <head>
        <title>Consulter</title>
        <link rel="stylesheet" href="consulter.css">
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>Liste des familles de médicaments</h1>
        <?php
            while($donnees = $lesfam->fetch())
            {
                echo '<p><strong>' . $donnees['id'] . '</strong> : ' . $donnees['libelle'] . '</p>';
            }
        ?>
    </body>
</html>