<?php

require(__DIR__.'/../../gsbIntra/model/model.php');

function index()
{
    require(__DIR__.'/../../gsbIntra/index.php');
}

function familles()
{
	$lesfam = getFamilles(); 
    require(__DIR__.'/../../gsbIntra/view/familles.php');
}

function medicaments()
{
	$lesMedicaments = getMedicaments(); 
    require(__DIR__.'/../../gsbIntra/view/medicaments.php');
}

function medicamentsFromF($idFamille)
{
	$lesMedicaments = getMedicamentsFromFamille($idFamille); 
    require(__DIR__.'/../../gsbIntra/view/medicaments.php');
}

function addFamille($id, $libelle)
{
    $newFamille = postFamille($id, $libelle);
    
    if($newFamille === false){
        die('Impossible d\'ajouter la famille');
    }
    else{
        header('Location: /gsbIntra/routeur/routeurFamilles.php');
    }
}

function addMedicament($id, $nomCommercial, $idFamille, $composition, $effets, $contreIndications)
{
    $newFamille = postMedicament($id, $nomCommercial, $idFamille, $composition, $effets, $contreIndications);
    
    if($newFamille === false){
        die('Impossible d\'ajouter le médicament');
    }
    else{
        header('Location: /gsbIntra/routeur/routeurMedicaments.php');
    }
}

function updateFamille($newId, $libelle, $oldId)
{
    $changeFamille = modifyFamille($newId, $libelle, $oldId);

    if($changeFamille == false){
        die('Impossible de modifier la famille');
    }
    else{
        header('Location: /gsbIntra/routeur/routeurFamilles.php');
    }
}

function updateMedicament($newId, $nomCommercial, $idFamille, $composition, $effets, $contreIndications, $oldId)
{
    $changeMedicament = modifyMedicament($newId, $nomCommercial, $idFamille, $composition, $effets, $contreIndications, $oldId);

    if($changeMedicament == false){
        die('Impossible de modifier le médicament');
    }
    else{
        header('Location: /gsbIntra/routeur/routeurMedicaments.php');
    }
}

function deleteFamille($id)
{
    $delFamille = removeFamille($id);

    if($delFamille == false){
        die('Impossible de supprimer la famille');
    }
    else{
        header('Location: /gsbIntra/routeur/routeurFamilles.php');
    }
}

function deleteMedicament($id)
{
    $delMedicament = removeMedicament($id);

    if($delMedicament == false){
        die('Impossible de supprimer le médicament');
    }
    else{
        header('Location: /gsbIntra/routeur/routeurMedicaments.php');
    }
}