<?php

require('E:/Annee_2021/gsbIntra/controleur/controleur.php');

$page = $_GET['page'] ?? null;
switch ($page) {
    case 'familles': 
        familles();
        break;
    case 'medicaments':
        medicaments();
        break;
    // case '':
    //     ();
    //     break;
    // case '' :
    //     ();
    //     break;
    // case '':
    //     ();
    //     break;
    default :
        index();
        break;
}