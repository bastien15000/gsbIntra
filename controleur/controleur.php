<?php

<<<<<<< HEAD
require('E:/Annee_2021/gsbIntra/model/model.php');
=======
require('C:\wamp64\www\gsbIntra\model\model.php');
>>>>>>> dc3a15383985e494b9b2c77557b30172875bd5e3

function index()
{
    require('E:/Annee_2021/gsbIntra/index.php');
}


function familles()
{
	$lesfam = getFamilles(); 
<<<<<<< HEAD
    require('E:/Annee_2021/gsbIntra/view/familles.php');
}

// function ()
// { 
//     require('./view/.php');
// }

// function ()
// {
//     require('./view/.php');
// }

// function ()
// {
=======
    require('C:\wamp64\www\gsbIntra\view\familles.php');
}

function medicaments()
{
	$lesMedicaments = getMedicaments(); 
    require('C:\wamp64\www\gsbIntra\view\medicaments.php');
}

medicaments();

// function ()
// {
//     require('./view/.php');
// }

// function ()
// {
>>>>>>> dc3a15383985e494b9b2c77557b30172875bd5e3
//     require('./view/.php ');
// }
