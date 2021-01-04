<?php

require('C:\wamp64\www\gsbIntra\model\model.php');

function index()
{
    require('./index.php');
}


function familles()
{
	$lesfam = getFamilles(); 
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
//     require('./view/.php ');
// }
