<!DOCTYPE html>
    <head>
        <title>Consulter</title>
        <link rel="stylesheet" href="consulter.css">
        <meta charset="UTF-8">
    </head>
    <body>
        <div class="formulaire">
            <h1>Ajouter un médicament : </h1>
            <form action="?action=addMedicament" method="post">
                <label for="id">Id : </label>
                <input id="id" name="id" type="text">
                <label for="nomCommercial">Nom commercial : </label>
                <input id="nomCommercial" name="nomCommercial" type="text">
                <label for="idFamille">Id famille : </label>
                <input id="idFamille" name="idFamille" type="text">
                <label for="composition">Composition : </label>
                <input id="composition" name="composition" type="text">
                <label for="effets">Effets : </label>
                <input id="effets" name="effets" type="text">
                <label for="contreIndications">Contre-indications : </label>
                <input id="contreIndications" name="contreIndications" type="text">
                <input type="submit" value="Ajouter">
            </form>
            <h1>Modifier un médicament : </h1>
            <form action="?action=updateMedicament" method="post">
                <label for="oldId">Id du médicament à modifier : </label>
                <input class="text" id="oldId" name="oldId" type="text">
                <label for="newId">Modifier id : </label>
                <input class="text" id="newId" name="newId" type="text"><br>
                <label for="nomCommercial">Modifier nom commercial : </label>
                <input class="text" id="nomCommercial" name="nomCommercial" type="text">
                <label for="idFamille">Modifier id Famille : </label>
                <input class="text" id="idFamille" name="idFamille" type="text">
                <label for="composition">Modifier composition : </label>
                <input id="composition" name="composition" type="text">
                <label for="effets">Modifier effets : </label>
                <input id="effets" name="effets" type="text">
                <label for="contreIndications">Modifier contre-indications : </label>
                <input id="contreIndications" name="contreIndications" type="text">
                <input class="btn" type="submit" value="Modifier">
            </form>
            <h1>Supprimer un médicament : </h1>
            <form action="?action=deleteMedicament" method="post">
                <label for="id">Id : </label>
                <input class="text" id="id" name="id" type="text">
                <input class="btn" type="submit" value="Supprimer">
            </form>
        </div>
        <h1>Liste des médicaments</h1>
        <?php
            while($donnees = $lesMedicaments->fetch())
            {
                if(isset($_GET['idFamille']))
                {
                    $donnees['idFamille'] = $_GET['idFamille'];
                }
                echo '<h3>' . $donnees['id'] . ' : </h3>
                <p>Nom commercial : ' . $donnees['nomCommercial'] . '</p>
                <p> Id Famille : ' . $donnees['idFamille'] . '</p>
                <p>Composition : ' . $donnees['composition'] . '</p>
                <p>Effets : ' . $donnees['effets'] . '</p>
                <p>Contre-Indications : ' . $donnees['contreIndications'] . ' </p>';
            }
        ?>
    </body>
</html>