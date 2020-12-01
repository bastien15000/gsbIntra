<?php

$page = $_GET['page'] ?? null;
switch ($page) {
    case 'france': 
        france();
        break;
    case 'contact':
        contact();
        break;
    case 'international':
        international();
        break;
    case 'produits' :
        produit();
        break;
    case 'connection':
        connection();
        break;
    default :
        index();
        break;
}