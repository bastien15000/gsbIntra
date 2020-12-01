<?php

function dbConnect()
{
	try
    {
        $db = new PDO('mysql:host=localhost;dbname=gsb_bdd_pharma;charset=utf8', 'root', '');
        return $db;
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
}

function getFamilles()
{
	$db = dbConnect();

	$fam = $db->query("SELECT id, libelle FROM famille;");

	return $fam;
}

function getMedicaments()
{
	$db = dbConnect();

	$med = $db->query("SELECT id, nomCommercial, idFamille, composition, effets, contreIndications FROM medicament;");

    return $med;
}

function getMedicamentFromFamille($idFamille)
{
	$db = dbConnect();

	$medF = $db->query("SELECT id, nomCommercial, idFamille, composition, effets, contreIndications FROM medicament INNER JOIN famille ON idFamille = ?;");

	$medF->execute(array($idFamille));

	return $medF;
}


